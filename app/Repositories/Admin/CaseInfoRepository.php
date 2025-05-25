<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CaseInfo;
use App\Repositories\BaseRepository;

class CaseInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'content',
        'image',
        'category_id',
        'views'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return CaseInfo::class;
    }
}
