<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\CreateCooperateRequest;
use App\Models\Admin\Cooperate;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class CooperateController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/cooperate');
        // 顯示合作需求表單頁面
        return view('cooperate')
            ->with('seoInfo', $seoInfo);
    }
    public function store(CreateCooperateRequest $request)
    {
        if ($request->filled('website')) {
            abort(403, '非法請求'); // 機器人填了 honeypot
        }

        $input = $request->all();

        // array to string conversion
        $input['cooperate'] = implode(',', $input['cooperate'] ?? []);

        // 儲存需求表單資料
        // 這裡可以使用模型來儲存資料到資料庫
        $requirement = Cooperate::create($input);


        // 回傳成功訊息
        return redirect()->back()->with('success', '表單已送出！');
    }
}
