<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public $table = 'product_type_infos';

    public $fillable = [
        'name'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
