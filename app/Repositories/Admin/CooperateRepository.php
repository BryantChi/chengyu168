<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Cooperate;
use App\Repositories\BaseRepository;

class CooperateRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'cooperate',
        'identity',
        'company_name',
        'contact_name',
        'contact_phone',
        'email',
        'address',
        'other'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Cooperate::class;
    }
}
