<?php

namespace App\Http\Controllers;

use App\Models\Admin\NewsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/news');
        $newsInfos = NewsInfo::orderBy('created_at', 'desc')->paginate(10);
        return view('news')
            ->with('seoInfo', $seoInfo)
            ->with('newsInfos', $newsInfos);
    }

    public function detail($id)
    {
        $seoInfo = SeoSettingRepository::getInfo('/news');
        $newsInfo = NewsInfo::find($id);

        $ip = Request::ip();
        $cacheKey = 'news_viewed_' . $id . '_' . $ip;

        // 檢查是否已經瀏覽過此案例
        if (!Cache::has($cacheKey)) {
            // 紀錄到快取中，防止短時間內重複紀錄，設置緩存，1小時後過期
            Cache::put($cacheKey, true, now()->addHour());
            // 增加瀏覽次數
            $newsInfo->increment('views');

            // cache()->put($cacheKey, true, 3600);
        }

        return view('news-details')
            ->with('seoInfo', $seoInfo)
            ->with('newsInfo', $newsInfo);
    }
}
