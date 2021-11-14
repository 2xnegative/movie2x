
@extends('mobile.master')

@section('content')
    @include('mobile.template.movie', ['movie_respon' => $movie, 'random_movie' => $random_movie])
@endsection