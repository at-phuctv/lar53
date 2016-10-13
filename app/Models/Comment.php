<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    //khai bao table
    protected $table = 'comment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'news_id',
        'content',
        'author',
        'date',
    ];

    //relation with news
    public function news()
    {
        return $this->belongsTo(News::class);
    }

    //display field csv
    public static $fieldCsv = [
        'id',
        'news_id',
        'content',
        'author',
        'date',
    ];

    //relation replycomment
    public function replyComments()
    {
        return $this->hasMany(ReplyComment::class);
    }
}
