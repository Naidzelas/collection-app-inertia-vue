<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Classifications\DefaultCategory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{

    protected $table = 'colapp.categories';

    protected $fillable = [
        'default_category_id',
    ];

    public function default_category(): HasOne
    {
        return $this->HasOne(DefaultCategory::class, 'id', 'default_category_id');
    }
}
