<?php

namespace App\Models\Collections\Collection;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Collections\Collection\Collection;
use App\Http\Models\Collections\Sega\SegaCollection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Collectionable extends Model
{

    protected $table = 'colapp.collectionables';

    protected $fillable = [
        'game_id',
        'type',
        'collectionable_id'
    ];

    public function collection(): BelongTo
    {
        return $this->belongsTo(Collection::class, 'collectionable_id');
    }

    public function sega(): HasOne
    {
        return $this->hasOne(SegaCollection::class, 'game_id');
    }

}
