<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Models\Classifications\DefaultCategory;
use App\Models\Category;
use Inertia\Inertia;
use Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    protected string $model = Category::class;
    
    public function index(){
        return Inertia::render('Categories',[
            'default_categories' => DefaultCategory::all()->map(function($defaultCategory){
                return [
                    'id' => $defaultCategory->id,
                    'name' => $defaultCategory->name,
                    'image_path' => $defaultCategory->image_path
                ];
            }),
        ]);
    }

    public function create()
    {
        $validated = Request::validate ([
            'default_category_id' => 'nullable'
        ]);
        
        Category::create($validated)->save();
    
        return Inertia::render('/category');
    }

    public function store(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
