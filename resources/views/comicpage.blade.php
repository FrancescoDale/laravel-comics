@extends('layouts.app')

@section('page-title', 'Comic Details')

@section('content')
    @include('partials.jumbotron')
    <section id="">
        <div class="container">
            <h1> {{ $comic['title'] }}</h1>
        </div>
    </section>
@endsection
