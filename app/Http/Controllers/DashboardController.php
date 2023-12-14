<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Inertia\Inertia;
use Request;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    // protected string $model = Category::class;
    
    public function index()
    {
    }

    public function load()
    {
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
