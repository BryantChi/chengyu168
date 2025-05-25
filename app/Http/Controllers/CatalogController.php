<?php

namespace App\Http\Controllers;

use App\Models\Admin\Catalog;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/catalog');

        // 取得所有目錄資訊
        $catalogs = Catalog::orderBy('id', 'desc')->paginate(10);

        return view('catalog')
            ->with('seoInfo', $seoInfo)
            ->with('catalogs', $catalogs);
    }

    public function incrementViews(Request $request)
    {
        try {
            $catalog = Catalog::findOrFail($request->id);
            $catalog->views = ($catalog->views ?? 0) + 1;
            $catalog->save();

            return response()->json([
                'success' => true,
                'views' => $catalog->views
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
