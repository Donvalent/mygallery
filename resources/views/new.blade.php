@extends('layouts.app')

@section('title')
    new
@endsection

@section('content')

    <div class="row justify-content-around">
        @foreach($pictures as $picture)
            <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="{{asset('/images/' . $picture->file->title)}}"></div>
        @endforeach
    </div>
@endsection

