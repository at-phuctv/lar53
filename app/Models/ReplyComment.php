<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{

    protected $table = 't_reply_comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'comment_id',
        'name',
        'date',
        'messages',
    ];
    public static $fieldCsv = [
        'id',
        'comment_id',
        'name',
        'date',
        'messages',
    ];

    //relation with comment
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
