@extends('layouts.app')

@section('page-title', 'Comic Details')

@section('content')
    @include('partials.jumbotron')

    <section id="">
        <div class="comic-thumb-container">
            <div class="container">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title'] }}">
            </div>
        </div>
        <div class="container">
            <h1> {{ $comic['title'] }}</h1>
        </div>
    </section>
@endsection
