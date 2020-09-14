@extends('layouts.app')

@section('title')
    Mygallery
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            @foreach($pictures as $picture)
                <div class="col-md-4 col-sm-12 col-lg-4 col-xl-2 p-1 text-center">
                    <img class="" src="{{asset('/images/' . $picture->file->title)}}" alt="" width="250px" height="250px">
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-3 md-3">
        <div class="row justify-content-md-center">
            {{$pictures->links()}}
        </div>
    </div>
@endsection

