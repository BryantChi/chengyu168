<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class NewsInfo
 * @package App\Models\Admin
 * @version January 8, 2025, 4:16 am UTC
 *
 * @property string $title
 * @property string $content
 * @property string $cover_front_image
 * @property boolean $status
 * @property integer $views
 */
class NewsInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'news_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'content',
        'cover_front_image',
        'status',
        'views'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'cover_front_image' => 'json',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'nullable',
        'cover_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'nullable',
        'views' => 'nullable'
    ];


}
