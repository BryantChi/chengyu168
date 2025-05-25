<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product_infos';

    public $fillable = [
        'title',
        'intro',
        'details',
        'product_type_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'intro' => 'string',
        'details' => 'string',
        'product_type_id' => 'string'
    ];

    public static array $rules = [
        'title' => 'nullable',
        'intro' => 'nullable',
        'details' => 'nullable'
    ];

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id')->orderBy('sort_order', 'asc');
    }

}
