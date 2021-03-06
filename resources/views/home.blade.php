@extends('layouts.app')

@section('page-title', 'DC Comics - Home')

@section('content')
    @include('partials.jumbotron')
    <section id="series">
        <div class="container">
            <div class="section_name text-uppercase text-center">
                <h2>current series</h2>
            </div>
            <div class="cards-container">
                @foreach ($series as $key => $item)
                    <div class="cardbox">
                        <a href=" {{ route('comic-page', ['id' => $key]) }}">
                            <div class="card-img">
                                <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                            </div>
                        </a>
                        <div class="card-info">
                            <span class="text-uppercase"> {{ $item['series'] }}</span>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
