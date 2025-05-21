<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/*');
        return view('products')
            ->with('seoInfo', $seoInfo);
    }

}
