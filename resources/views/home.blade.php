@extends('layouts.main-layout')

@section('content')
    <h1>Movie</h1>

    @foreach ($movies as $movie)
        <ul>
            <li>
                {{ $movie->title }}
            </li>
        </ul>
    @endforeach
@endsection
