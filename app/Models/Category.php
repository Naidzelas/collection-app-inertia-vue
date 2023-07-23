<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'colapp.categories';

    protected $fillable = [
        'default_category_id',
    ];
}
