<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\ProductRepository;
use App\Models\Admin\ProductImage;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;

class ProductController extends AppBaseController
{
    /** @var ProductRepository $productRepository*/
    private $productRepository;

    // 設定每個產品的最大圖片數量
    private const MAX_IMAGES_PER_PRODUCT = 10;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->paginate(10);

        return view('admin.products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created Product in storage.
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        $input['intro'] = $input['intro'] ?? "";
        $input['details'] = $input['details'] ?? "";

        $product = $this->productRepository->create($input);

        // 處理產品圖片上傳
        if ($request->hasFile('product_images')) {
            // 檢查圖片數量
            $uploadCount = count($request->file('product_images'));

            // 如果超過最大數量，顯示錯誤
            if ($uploadCount > self::MAX_IMAGES_PER_PRODUCT) {
                Flash::error('每個產品最多只能有 '.self::MAX_IMAGES_PER_PRODUCT.' 張圖片');
                return redirect()->back()->withInput();
            }

            $this->saveProductImages($product, $request);
        }

        Flash::success('產品建立成功');

        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified Product.
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('找不到產品');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('找不到產品');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('找不到產品');

            return redirect(route('admin.products.index'));
        }

        $input = $request->all();
        $input['intro'] = $input['intro'] ?? "";
        $input['details'] = $input['details'] ?? "";

        $product = $this->productRepository->update($input, $id);

        // 計算更新後的圖片數量
        $existingImageCount = $product->images->count();
        $deleteCount = $request->has('delete_images') ? count($request->delete_images) : 0;
        $uploadCount = $request->hasFile('product_images') ? count($request->file('product_images')) : 0;

        // 計算最終圖片數量
        $finalImageCount = $existingImageCount - $deleteCount + $uploadCount;

        // 檢查是否超過限制
        if ($finalImageCount > self::MAX_IMAGES_PER_PRODUCT) {
            Flash::error('每個產品最多只能有 '.self::MAX_IMAGES_PER_PRODUCT.' 張圖片');
            return redirect()->back()->withInput();
        }

        // 處理圖片刪除
        if ($request->has('delete_images')) {
            $this->deleteProductImages($request->delete_images);
        }

        // 處理圖片排序
        if ($request->has('sort_orders')) {
            $this->updateImageSortOrders($request->sort_orders);
        }

        // 處理新上傳的圖片
        if ($request->hasFile('product_images')) {
            $this->saveProductImages($product, $request);
        }

        Flash::success('產品更新成功');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('找不到產品');

            return redirect(route('admin.products.index'));
        }

        // 刪除產品關聯的所有圖片
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $this->productRepository->delete($id);

        Flash::success('產品刪除成功');

        return redirect(route('admin.products.index'));
    }

    /**
     * 儲存產品圖片
     */
    private function saveProductImages($product, $request)
    {
        $files = $request->file('product_images');
        $newSortOrders = $request->new_sort_orders ?? [];
        $maxSortOrder = ProductImage::where('product_id', $product->id)->max('sort_order') ?? 0;

        foreach ($files as $key => $file) {
            // 存儲圖片到儲存空間
            $path = $file->store('product_images', 'public');

            // 儲存圖片記錄到資料庫
            $sortOrder = isset($newSortOrders[$key]) ? $newSortOrders[$key] : $maxSortOrder + 1;
            $maxSortOrder = max($maxSortOrder, $sortOrder);

            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $path,
                'sort_order' => $sortOrder
            ]);
        }
    }

    /**
     * 刪除產品圖片
     */
    private function deleteProductImages($imageIds)
    {
        foreach ($imageIds as $imageId) {
            $image = ProductImage::find($imageId);

            if ($image) {
                // 刪除實際圖片檔案
                Storage::disk('public')->delete($image->image_path);

                // 刪除資料庫記錄
                $image->delete();
            }
        }
    }

    /**
     * 更新圖片排序（根據拖曳排序的結果）
     */
    private function updateImageSortOrders($sortOrders)
    {
        foreach ($sortOrders as $imageId => $sortOrder) {
            ProductImage::where('id', $imageId)
                ->update(['sort_order' => $sortOrder]);
        }
    }
}
