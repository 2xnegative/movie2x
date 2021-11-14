
@extends('master')

@section('content')
    @include('template.movie', ['movie_respon' => $movie, 'random_movie' => $random_movie])
@endsection