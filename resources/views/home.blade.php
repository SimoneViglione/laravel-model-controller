@extends('layouts.app')

@section('content')

    <h1 class="mt-3 text-warning">Movies</h1>

    <div class="row d-flex justify-content-evenly mt-3">
        @foreach($movies as $movie)

        <div class="col-2 me-1 mb-2 ms_card text-success-emphasis rounded">
            <h5 class="text-success mt-3 pb-2">Title: <span class="text-light"> {{$movie->title}} </span> </h5>
            <h6 class="text-info">Original title: <span class="text-light"> {{$movie->original_title}} </span> </h6>
            <h6 class="text-info">Nationality: <span class="text-light"> {{$movie->nationality}}</span> </h6>
            <h6 class="text-info">Date: <span class="text-light"> {{$movie->date}} </span> </h6>
            <h6 class="text-info">Vote: <span class="text-light"> {{$movie->vote}}</span> </h6>
        </div>

        @endforeach
    </div>
    

@endsection