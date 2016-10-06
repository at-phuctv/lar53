<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 't_news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'introduce',
        'content',
        'image',
        'cate_id',
        'user_id',
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
