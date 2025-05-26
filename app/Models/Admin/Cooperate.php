<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Cooperate extends Model
{
    public $table = 'cooperate_infos';

    public $fillable = [
        'cooperate',
        'identity',
        'company_name',
        'contact_name',
        'contact_phone',
        'email',
        'address',
        'other'
    ];

    protected $casts = [
        'id' => 'integer',
        'cooperate' => 'string',
        'identity' => 'string',
        'company_name' => 'string',
        'contact_name' => 'string',
        'contact_phone' => 'string',
        'email' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'cooperate' => 'required',
        'identity' => 'required',
        'company_name' => ['required', 'string', 'regex:/^[\x{4e00}-\x{9fa5}a-zA-Z\s]{2,20}$/u'],
        'contact_name' => ['required', 'string', 'regex:/^[\x{4e00}-\x{9fa5}a-zA-Z\s]{2,20}$/u'],
        'contact_phone' => ['required', 'regex:/^(09\d{8}|0\d{1,2}-?\d{6,8})$/'],
        'email' => ['required', 'email'],
        'address' => ['nullable', 'string', 'max:255'],
        'other' => ['nullable', 'string', 'max:1000']
    ];

    public static array $messages = [
        'cooperate.required' => '合作方式不能為空',
        'identity.required' => '身份不能為空',
        'company_name.required' => '公司名稱不能為空',
        'company_name.regex' => '公司名稱格式不正確',
        'contact_name.required' => '聯絡人姓名不能為空',
        'contact_name.regex' => '聯絡人姓名格式不正確',
        'contact_phone.required' => '聯絡電話不能為空',
        'contact_phone.regex' => '聯絡電話格式不正確',
        'email.required' => '信箱不能為空',
        'email.email' => '信箱格式不正確',
        'address.max' => '地址不能超過255個字符',
        'other.max' => '其他信息不能超過1000個字符'
    ];


}
