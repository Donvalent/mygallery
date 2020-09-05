<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $pictures = Picture::with('files')->paginate(12);

        return view('new', [
            'pictures' => $pictures,
        ]);
    }
}
