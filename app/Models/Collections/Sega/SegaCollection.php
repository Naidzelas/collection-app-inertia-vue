<?php

namespace App\Models\Collections\Sega;

use Illuminate\Database\Eloquent\Model;

class SegaCollection extends Model
{

    protected $table = 'colapp.sega_collection';

    protected $fillable = [
        'name',
        'price',
        'condition',
    ];
}
