<?php

namespace App\Http\Controllers\Categories\Playstation;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PlaystationCollectionController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected string $model = PlaystationCollection::class;
    
    public function index(){
        return Inertia::render('PlaystationGames/playstation');
    }
}
