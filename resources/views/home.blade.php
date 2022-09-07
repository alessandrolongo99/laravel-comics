@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <div class="row g-5">
        @foreach ($comics as $comic)
            <div class="col-2">
                <img src="{{$comic -> image}}" alt="{{$comic -> title}}">
                <h6 class="text-white py-2">{{$comic -> title}}</h6>
            </div>
        @endforeach
    </div>
@endsection