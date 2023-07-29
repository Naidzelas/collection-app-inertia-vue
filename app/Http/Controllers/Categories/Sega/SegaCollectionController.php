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
            'data' => SegaCollection::query()
                ->when(Request::input('search'), function ($data, $search){
                    $data->where('name','like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString(),
                'filters' => Request::only(['search'])
        ]);
        // return Inertia::render('SegaGames/sega',[
        //     'data' => SegaCollection::all()->map(function($data){
        //         return [
        //             'id' => $data->id,
        //             'name' => $data->name,
        //             'price' => $data->price,
        //         ];
        //     }),
        // ]);
    }

    public function create(){
       
        $validated = Request::validate ([
            'name' => 'required'
        ]);
        
        SegaCollection::create($validated)->save();
    
        return Inertia::render('SegaGames/sega');
    }
}
