<?php

namespace App\Repositories\Admin;

use App\Models\Admin\NewsInfo;
use App\Repositories\BaseRepository;

/**
 * Class NewsInfoRepository
 * @package App\Repositories\Admin
 * @version January 8, 2025, 4:16 am UTC
*/

class NewsInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'cover_front_image',
        'status',
        'views',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NewsInfo::class;
    }
}
