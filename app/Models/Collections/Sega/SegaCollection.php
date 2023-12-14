<?php

namespace App\Models\Collections\Sega;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Http\Models\GamePrices\SegaMegadriveGamePrice;

class SegaCollection extends Model
{

    protected $table = 'colapp.sega_megadrive_collection';

    protected $fillable = [
        'name',
        'price',
        'condition',
    ];

    public function segaMegadriveGamePrice(): HasMany
    {
        return $this->hasMany(SegaMegadriveGamePrice::class);
    }
}
