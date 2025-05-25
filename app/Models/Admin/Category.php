<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

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

    public function caseInfos()
    {
        return $this->hasMany(CaseInfo::class);
    }

}
