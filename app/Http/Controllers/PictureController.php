<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;

class PictureController extends Controller
{
    public function index()
    {
        return Picture::all();
    }

    public function show(Picture $picture)
    {
        return $picture;
    }

    public function store(Request $request)
    {
        $picture = Picture::create($request->all());

        return response()->json($picture, 201);
    }

    public function update(Request $request, Picture $picture)
    {
        $picture->update($request->all());

        return response()->json($picture, 200);
    }

    public function delete(Picture $picture)
    {
        $picture->delete();

        return response()->json(null, 204);
    }
}
