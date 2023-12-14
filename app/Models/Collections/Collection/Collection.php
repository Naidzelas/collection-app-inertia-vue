<?php

namespace App\Models\Collections\Collection;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Collection extends Model
{

    protected $table = 'colapp.collection';

    protected $fillable = [
        'user_id',
        'game_id',
    ];

    public function collectionable(): HasOne
    {
        return $this->hasOne(Collectionable::class, 'id');
    }
}
