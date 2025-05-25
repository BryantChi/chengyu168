<?php

namespace App\Repositories\Admin;

use App\Models\Admin\ProductType;
use App\Repositories\BaseRepository;

class ProductTypeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ProductType::class;
    }
}
