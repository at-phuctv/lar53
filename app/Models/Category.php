<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libs\Traits\ContentUploadTrait;

class Category extends Model
{

    use ContentUploadTrait;

    /**
     *
     * The table define category model
     *
     */
    protected $table = 't_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'introduce', 'id', 'image',
    ];
    // field csv
    public static $fieldCsv = ['id', 'name', 'introduce'];

    // relation with news model
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
