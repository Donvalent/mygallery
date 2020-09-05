@extends('layouts.app')

@section('title')
    new
@endsection

@section('content')

    <div class="row justify-content-around">
        @foreach($pictures as $picture)
            <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="{{}}" alt=""></div>
        @endforeach
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="https://via.placeholder.com/150" alt=""></div>
        <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="https://via.placeholder.com/150" alt=""></div>
        <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="https://via.placeholder.com/150" alt=""></div>
        <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="https://via.placeholder.com/150" alt=""></div>
        <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="https://via.placeholder.com/150" alt=""></div>
        <div class="col-sm-4 col-lg-2"><img class="img-fluid" src="https://via.placeholder.com/150" alt=""></div>
    </div>
@endsection

