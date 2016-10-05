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
}
