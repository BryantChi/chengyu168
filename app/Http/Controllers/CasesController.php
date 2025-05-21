<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/*');
        return view('cases')
            ->with('seoInfo', $seoInfo);
    }
}
