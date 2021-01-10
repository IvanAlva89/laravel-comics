@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        <section class="general-hero">
            <div class="container">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="teen goo">
            </div>       
        </section>

        <section class="comics mb-4">
            <div class="container">
                <h1>current series</h1>
                <ul class="comics-list">
                    @foreach($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['slug']) }}">
                                <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                                <h3>{{ $comic['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="btn-comics">
                    <a href="/">load more</a>
                </div> 
            </div>

            <div class="comics-panel">
                <div class="container">
                    <ul class="flex">
                        <li>
                            <a href="/">
                                <img src="{{ asset('images/digital-comics.png') }}" alt="digital comics">
                                <p>digital comics</p>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <img src="{{ asset('images/merchandise.png') }}" alt="merchandise">
                                <p>dc merchandise</p>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <img src="{{ asset('images/subscriptions.png') }}" alt="subscriptions">
                                <p>subscription</p>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <img src="{{ asset('images/locator.png') }}" alt="locator">
                                <p>comic shop locator</p>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <img src="{{ asset('images/power-visa.svg') }}" alt="dc power visa">
                                <p>dc power visa</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>       
    </main>
@endsection