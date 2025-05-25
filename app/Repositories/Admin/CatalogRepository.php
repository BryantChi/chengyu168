<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Catalog;
use App\Repositories\BaseRepository;

class CatalogRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'intro',
        'image',
        'file',
        'views'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Catalog::class;
    }
}
