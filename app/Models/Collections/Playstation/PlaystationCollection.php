<?php

namespace App\Models\Collections\Playstation;

use Illuminate\Database\Eloquent\Model;

class PlaystationCollection extends Model
{

    protected $table = 'colapp.playstation_collection';

    protected $fillable = [
        'name',
        'price',
    ];
}
