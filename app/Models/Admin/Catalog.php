<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public $table = 'catalog_infos';

    public $fillable = [
        'title',
        'intro',
        'image',
        'file',
        'views'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'views' => 'integer'
    ];

    public static array $rules = [
        'title' => 'nullable',
        'intro' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        'file' => 'nullable|mimes:pdf',
        'views' => 'nullable'
    ];


}
