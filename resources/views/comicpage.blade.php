@extends('layouts.app')

@section('page-title', 'Comic Details')

@section('content')
    @include('partials.jumbotron')

    <section id="">
        <div class="comic-thumb-container container-fluid">
            <div class="container">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </section>
    <section id="main-comic-info" class="container">
        <div class="info-row">
            <div class="comic-info">
                <h1 class="mt-2"> {{ $comic['title'] }}</h1>

            </div>
            <div class="adv-box text-right">
                <p class="text-uppercase mt-2">advertisement</p>
                <img src="{{ asset("/images/adv.jpg") }}" alt="advertisement">
            </div>
        </div>
    </section>

@endsection
