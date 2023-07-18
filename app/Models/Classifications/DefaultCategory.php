<?php

namespace App\Models\Classifications;

use Illuminate\Database\Eloquent\Model;

class DefaultCategory extends Model
{

    protected $table = 'colapp.default_categories';

    protected $fillable = [
        'name',
    ];
}
