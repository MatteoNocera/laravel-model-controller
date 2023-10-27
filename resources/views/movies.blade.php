@extends('layouts.app')

@section('page-title', 'Movies')

@section('content')

    <div class="container py-3">

        <h1 class="py-4">Movies</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-4">

            @forelse ($movies as $movie)
                <div class="col px-3">


                    <div class="card text-bg-dark">
                        <img src="https://picsum.photos/400/400?random={{ $movie['id'] }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h3 class="card-title ">Title: {{ $movie['title'] }}</h3>
                            <h5 class="">Original Title: {{ $movie['original_title'] }}</h5>
                            <p class="card-text ">Nationality: {{ $movie['nationality'] }}</p>
                            <p class="card-text "><small>Date: {{ $movie['date'] }}</small></p>
                            <h2 class="card-title ">Rating: {{ $movie['vote'] }}</h2>

                        </div>

                    </div>
                </div>



            @empty

                <div class="col">
                    <h3>No film</h3>
                </div>
            @endforelse



        </div>

        <div class="text-center">
            <button class="btn btn-dark">
                <a class="text-white text-decoration-none" href="{{ route('welcome') }}">Back to Home</a>
            </button>
        </div>

    </div>
@endsection
