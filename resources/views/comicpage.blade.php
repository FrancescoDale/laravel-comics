@extends('layouts.app')

@section('page-title', 'Comic Details')

@section('content')
    @include('partials.jumbotron')

    <section id="" class="container">
        <img src="{{ $comic['thumb']}}" alt="{{ $comic['title'] }}">
        <div>
            <h1> {{ $comic['title'] }}</h1>
        </div>
    </section>
@endsection
