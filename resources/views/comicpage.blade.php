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
        <div class="container details-row">
            <div class="talent">
                <h2 class="text-capitalize">talent</h2>
                <ul>
                    <li>
                        <span class="label">Art by :</span>
                        <span class="names">
                            @foreach ($comic['artists'] as $value)
                                <a href="#">{{ $value }}</a>
                            @endforeach
                        </span>
                    </li>
                    <li>
                        <span class="label">Written by :</span>
                        <span class="names">
                            @foreach ($comic['writers'] as $value)
                                <a href="#">{{ $value }}  </a>
                            @endforeach
                        </span>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <h2 class="text-capitalize ">specs</h2>
                <ul>
                    <li>
                        <span class="label">Series :</span>
                        <span class="names">{{ $comic['series'] }} </span>
                    </li>
                    <li>
                        <span class="label">Price :</span>
                        <span class="names">{{ $comic['price'] }}</span>
                    </li>
                    <li>
                        <span class="label">On sale date :</span>
                        <span class="names">{{ $comic['sale_date'] }}</span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="container buttons-bar">
            <div class="icon-box text-right text-uppercase">
                <a href="#">
                    <span class="icon-box-text">digital comics</span>
                    <span class="icon-box-icon"></span>
                </a>
            </div>
            <div class="icon-box text-right text-uppercase">
                <a href="#">
                    <span class="icon-box-text">shop dc</span>
                    <span class="icon-box-icon"></span>
                </a>
            </div>
            <div class="icon-box text-right text-uppercase">
                <a href="#">
                    <span class="icon-box-text">comic shop locator</span>
                    <span class="icon-box-icon"></span>
                </a>
            </div>
            <div class="icon-box text-right text-uppercase">
                <a href="#">
                    <span class="icon-box-text">subscriptions</span>
                    <span class="icon-box-icon"></span>
                </a>
            </div>
        </div>
    </section>

@endsection
