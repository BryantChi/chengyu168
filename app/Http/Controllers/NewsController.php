<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/*');
        return view('news')
            ->with('seoInfo', $seoInfo);
    }
}
