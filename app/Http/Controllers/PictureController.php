<?php

namespace App\Http\Controllers;

use App\Category;
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

        $categories = explode(', ', $request->get('category'));
        $categoriesId = array();

        foreach ($categories as $category)
        {
            if (!Category::where('title', '=', $category)->exists())
                return response()->json($category . ': There is no such category', 400);
            $categoryId = Category::where('title', '=', $category)->first('id');
            array_push($categoriesId, $categoryId['id']);
        }

        $file = new File([
            'title' => $request->file('image')->getClientOriginalName(),
            'path' => public_path() . '\images',
        ]);

        $file->save();

        $picture = new Picture([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'file_id' => $file->id
        ]);

        $picture->save();

        $picture->categories()->attach($categoriesId);

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
