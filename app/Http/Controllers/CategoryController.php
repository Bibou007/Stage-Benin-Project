<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store()
    {
        Category::create([

            'title' => '',
        ]);
        return 'Categorie creer';
    }
}
