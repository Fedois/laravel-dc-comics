@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')
<div id="main-comics">
    <div class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">      
    </div>

    <div class="container pt-3">
        <h1>CURRENT SERIES</h1>

        <div class="my-cards">
            <div class="container-fluid text-center">
                <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
                    
                    @foreach($comics as $comic)
                        <a href="">
                            <div class="col">
                                <img src="{{ vite::asset('resources/img/adv.jpg') }}" alt="comic">
                                <div class="info-card p-3">
                                    <h3 class="fs-5 text-white">{{ $comic->title }}</h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    
                </div>
            </div>
        </div>

        <div class="load">
            <button><a href="#">LOAD MORE</a></button>
        </div>
    </div>
</div>

@endsection
