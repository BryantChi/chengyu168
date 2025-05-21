<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/about');
        return view('about')
            ->with('seoInfo', $seoInfo);
    }
}
