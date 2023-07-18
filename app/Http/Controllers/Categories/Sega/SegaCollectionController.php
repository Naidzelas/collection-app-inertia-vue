<?php

namespace App\Http\Controllers\Categories\Sega;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Collections\Sega\SegaCollection;
use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Request;
use Illuminate\Support\Facades\App;

class SegaCollectionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    protected string $model = SegaCollection::class;
    
    public function index(){
        return Inertia::render('SegaGames/sega', [
            'sega' => SegaCollection::query()
                ->when(Request::input('search'), function ($query, $search){
                    $query->where('name','like', "%{$search}%");
                })
                ->paginate(4)
                ->withQueryString(),
                'filters' => Request::only(['search'])
        ]);
    }

    public function create(){
       
        $validated = Request::validate ([
            'name' => 'required'
        ]);
        
        SegaCollection::create($validated)->save();
    
        return Inertia::render('SegaGames/sega');
    }
}
