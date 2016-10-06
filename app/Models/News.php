<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libs\Traits\ContentUploadTrait;

class News extends Model
{

    use ContentUploadTrait;

    protected $table = 't_news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author',
        'introduce',
        'content',
        'image',
        'cate_id',
        'user_id',
        'title',
    ];
    public static $fieldCsv = [
        'id',
        'cate_id',
        'author',
        'introduce',
        'content',
    ];

    /**
     * Get the category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
