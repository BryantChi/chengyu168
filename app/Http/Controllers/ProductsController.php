<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use App\Models\Admin\ProductType;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
        $seoInfo = SeoSettingRepository::getInfo('/products');
        // 取得所有分類
        $product_types = ProductType::all();

        // 建立查詢，預設取得所有案例
        $query = Product::query();

        // 如果有選擇分類，過濾案例
        if ($request->filled('product_type_id')) {
            $query->where('product_type_id', $request->input('product_type_id'));
        }

        // 如果有搜尋關鍵字，依項目標題搜尋
        if ($request->filled('search')) {
            // $query->where('title', 'like', '%' . $request->input('search') . '%');
            $query->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->input('search') . '%')
                      ->orWhere('intro', 'like', '%' . $request->input('search') . '%')
                      ->orWhere('details', 'like', '%' . $request->input('search') . '%');
            });
        }

        // 取得案例，並分頁顯示
        $products = $query->orderBy(
            'id',
            'desc'
        )->paginate(9);

        return view('products', compact('product_types', 'products', 'seoInfo'));

    }

    public function show($id, Request $request)
    {
        $seoInfo = SeoSettingRepository::getInfo('/products');

        // 取得產品
        $product = Product::findOrFail($id);

        // 取得產品圖片
        $images = $product->images;

        $product_types = ProductType::all();

        // 取得查詢字串中的 product_type_id
        $selectedType = $request->query('product_type_id');

        // 取得目前選擇的分類
        // $selectedCategory = $request->input('product_type_id');

        return view('products-details', compact('product', 'product_types', 'images', 'selectedType', 'seoInfo'));

    }

}
