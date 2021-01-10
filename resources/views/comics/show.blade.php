@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        <section class="general-hero" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}"> 
            </div>      
        </section>

        <section class="details mt-3 mb-3">
            <div class="container flex">
                <div class="details-info">
                    <h1>{{ $comic['title'] }}</h1>
                    <div class="availability flex">
                        <div class="left flex">
                            <div class="price">U.S. Price: ${{ $comic['price'] }}</div>
                            <p>Available on 11/10</p>
                        </div>
                        <div class="right flex">
                            <span>Check Availability</span>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="text">{!! $comic['body'] !!}</div>
                </div>
                <div class="advertisement">
                    <h3>Advertisement</h3>
                    <img src="{{ asset('images/adv.png') }}" alt="advertisement">
                </div>
            </div>      
        </section>
    </main>
@endsection