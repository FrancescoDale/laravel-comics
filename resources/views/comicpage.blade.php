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
                <div class="comic-availability mt-4">
                    <div class="price text-capitalize">
                        <span>u.s. price : {{ $comic['price'] }}</span>
                    </div>
                    <div class="status text-right text-uppercase">
                        <span>available</span>
                    </div>
                    <div class="check text-capitalize">
                        <span>check availability</span>
                    </div>

                </div>
                <div class="comic-description mt-4">
                    <p> {{ $comic['description']}} </p>


                </div>

            </div>
            <div class="adv-box text-right">
                <p class="text-uppercase mt-2">advertisement</p>
                <img src="{{ asset("/images/adv.jpg") }}" alt="advertisement">
            </div>
        </div>
    </section>
    <section id="detail-comic-info" class="container-fluid">
        <div class="container details-row mt-4">
            <div class="talent">

            </div>
            <div class="specs">

            </div>

        </div>
    </section>

@endsection
