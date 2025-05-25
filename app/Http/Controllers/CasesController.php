<?php

namespace App\Http\Controllers;

use App\Models\Admin\CaseInfo;
use App\Models\Admin\Category;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CasesController extends Controller
{
    //
    public function index(Request $request)
    {
        $seoInfo = SeoSettingRepository::getInfo('/cases');
        // 取得所有分類
        $categories = Category::all();

        // 建立查詢，預設取得所有案例
        $query = CaseInfo::query();

        // 如果有選擇分類，過濾案例
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // 如果有搜尋關鍵字，依項目標題搜尋
        if ($request->filled('search')) {
            // $query->where('title', 'like', '%' . $request->input('search') . '%');
            $query->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->input('search') . '%')
                      ->orWhere('content', 'like', '%' . $request->input('search') . '%');
            });
        }

        // 取得案例，並分頁顯示
        $cases = $query->orderBy(
            'id',
            'desc'
        )->paginate(9);

        return view('cases', compact('categories', 'cases', 'seoInfo'));
    }

    public function show($id, Request $request)
    {
        $seoInfo = SeoSettingRepository::getInfo('/cases');
        // 取得案例
        $case = CaseInfo::findOrFail($id);

        $categories = Category::all();

        // 取得查詢字串中的 category_id
        $selectedCategory = $request->query('category_id');

        // 取得目前選擇的分類
        // $selectedCategory = $request->input('category_id');

        $ip = $request->ip();
        $cacheKey = 'case_viewed_' . $id . '_' . $ip;

        // 檢查是否已經瀏覽過此案例
        if (!Cache::has($cacheKey)) {
            // 紀錄到快取中，防止短時間內重複紀錄，設置緩存，1小時後過期
            Cache::put($cacheKey, true, now()->addHour());
            // 增加瀏覽次數
            $case->increment('views');

            // cache()->put($cacheKey, true, 3600);
        }

        return view('cases-details', compact('case', 'categories', 'selectedCategory', 'seoInfo'));
    }
}
