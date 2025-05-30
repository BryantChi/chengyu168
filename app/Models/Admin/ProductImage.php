<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image_path',
        'sort_order'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
