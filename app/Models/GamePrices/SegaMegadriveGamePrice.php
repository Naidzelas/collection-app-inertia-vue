<?php

namespace App\Models\Collections\Sega;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SegaMegadriveGamePrice extends Model
{

    protected $table = 'colapp.sega_megadrive_game_prices';

    protected $fillable = [
        'sega_megadrive_game_id',
        'loose_price',
        'cib_price',
        'new_price',
        'manual_price',
    ];
}
