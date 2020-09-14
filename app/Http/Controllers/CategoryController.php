<?php

namespace App\Http\Controllers;

use App\Category;
use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class CategoryController extends Controller
{

    public function index()
    {
        $pictures = Picture::with('file', 'categories')->whereHas('categories', function ($query){
            $query->where('title', ucfirst(Route::currentRouteName()));
        })->paginate(12);

        return view('category', [
            'pictures' => $pictures,
        ]);
    }
}
