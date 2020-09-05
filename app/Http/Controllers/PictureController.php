<?php

namespace App\Http\Controllers;

use App\File;
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
        if(File::where('title', $request->file('image')->getClientOriginalName())->first())
            return response()->json('This file already exists', 400);

        $file = new File([
            'title' => $request->file('image')->getClientOriginalName(),
            'path' => trim(public_path(), '/public') . 'resources\pictures'
        ]);

        $file->save();

        $picture = new Picture([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'category' => $request->get('category'),
            'file_id' => $file->id
        ]);

        $picture->save();

        $file->saveFile($request->file('image'));

        return response()->json('File has created!' ,201);
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
