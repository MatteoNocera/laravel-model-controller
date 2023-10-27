@extends('layouts.app')

@section('page-title', 'Home Page')

@section('content')

    <div class="container">

        <h1 class="py-4">Welcome to the Best Movies Site</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae unde, delectus id officiis perferendis
            dicta
            quibusdam voluptatibus et qui voluptas voluptates eos aut vero, saepe tempore! Nemo esse nisi earum!
        </p>

        <button class="btn btn-dark">
            <a class="text-white text-decoration-none" href="{{ route('movies') }}">See our Movies</a>
        </button>


    </div>
@endsection
