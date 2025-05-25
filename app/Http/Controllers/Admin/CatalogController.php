<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCatalogRequest;
use App\Http\Requests\Admin\UpdateCatalogRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\CatalogRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;

class CatalogController extends AppBaseController
{
    /** @var CatalogRepository $catalogRepository*/
    private $catalogRepository;

    public function __construct(CatalogRepository $catalogRepo)
    {
        $this->catalogRepository = $catalogRepo;
    }

    /**
     * Display a listing of the Catalog.
     */
    public function index(Request $request)
    {
        $catalogs = $this->catalogRepository->paginate(10);

        return view('admin.catalogs.index')
            ->with('catalogs', $catalogs);
    }

    /**
     * Show the form for creating a new Catalog.
     */
    public function create()
    {
        return view('admin.catalogs.create');
    }

    /**
     * Store a newly created Catalog in storage.
     */
    public function store(CreateCatalogRequest $request)
    {
        $input = $request->all();

        // 處理圖片上傳
        $input['image'] = $this->processImage($request->file('image'), 'cover_front_image');

        // 處理檔案上傳
        $input['file'] = $this->handleFileUpload($request->file('file'), '', 'catalog_files');
        // 如果沒有上傳檔案，則設置為空字串
        if (!$input['file']) {
            $input['file'] = '';
        }

        $catalog = $this->catalogRepository->create($input);

        Flash::success('產品目錄新增成功。');

        return redirect(route('admin.catalogs.index'));
    }

    /**
     * Display the specified Catalog.
     */
    public function show($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('admin.catalogs.index'));
        }

        return view('admin.catalogs.show')->with('catalog', $catalog);
    }

    /**
     * Show the form for editing the specified Catalog.
     */
    public function edit($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('admin.catalogs.index'));
        }

        return view('admin.catalogs.edit')->with('catalog', $catalog);
    }

    /**
     * Update the specified Catalog in storage.
     */
    public function update($id, UpdateCatalogRequest $request)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('admin.catalogs.index'));
        }

        $input = $request->all();

        // 處理圖片上傳
        $input['image'] = $this->handleImageUpload($request->file('image'), $catalog['image'], 'cover_front_image');

        // 處理檔案上傳
        $input['file'] = $this->handleFileUpload($request->file('file'), $catalog['file'], 'catalog_files');
        // 如果沒有上傳檔案
        if (!$input['file']) {
            $input['file'] = $catalog['file']; // 保持原有檔案路徑
        }

        $catalog = $this->catalogRepository->update($input, $id);




        Flash::success('產品目錄更新成功。');

        return redirect(route('admin.catalogs.index'));
    }

    /**
     * Remove the specified Catalog from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $catalog = $this->catalogRepository->find($id);

        if (empty($catalog)) {
            Flash::error('Catalog not found');

            return redirect(route('admin.catalogs.index'));
        }

        $this->catalogRepository->delete($id);

        Flash::success('Catalog deleted successfully.');

        return redirect(route('admin.catalogs.index'));
    }

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }

    // 共用檔案處理函式
    function handleFileUpload($newFile, $existingFilePath, $uploadDir)
    {
        if ($newFile) {
            $path = public_path('uploads/files/' . $uploadDir . '/');
            $filename = time() . '_' . $newFile->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有檔案，刪除舊檔案
            if (!empty($existingFilePath) && File::exists(public_path('uploads/' . $existingFilePath))) {
                File::delete(public_path('uploads/' . $existingFilePath));
            }

            // 儲存新檔案
            $newFile->move($path, $filename);

            return 'files/' . $uploadDir . '/' . $filename;
        }

        // 若無新檔案，返回舊檔案路徑
        return $existingFilePath;
    }
}
