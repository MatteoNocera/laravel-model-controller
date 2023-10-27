@extends('layouts.app')

@section('page-title', 'Movie')

@section('content')
    @forelse ($movies as $movie)
        <p>{{ $movie['title'] }}</p>
    @empty
        <p>No film</p>
    @endforelse
@endsection
