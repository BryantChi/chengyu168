<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CaseInfo extends Model
{
    public $table = 'case_infos';

    public $fillable = [
        'title',
        'content',
        'image',
        'category_id',
        'views'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'image' => 'json',
        'category_id' => 'string'
    ];

    public static array $rules = [
        'title' => 'nullable',
        'content' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        'category_id' => 'nullable',
        'views' => 'nullable'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
