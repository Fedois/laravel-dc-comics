@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')

<div class="container-single-card bg-dark p-5">
    <div class="box bg-white d-flex p-3">
        <div class="content-sx w-25">
            <img src="{{ $comic->thumb }}" alt="comic">
            <h1>{{ $comic->title }}</h1>
        </div>
    
        <div class="content-dx w-75">
            <p> 
                <strong>descrizione:</strong>
                <br>
                {{ $comic->description }}
            </p>

            <p> 
                <strong>serie:</strong>
                <br>
                {{ $comic->series }}
            </p>

            <p> 
                <strong>data di vendita:</strong>
                <br>
                {{ $comic->sale_date }}
            </p>

            <p> 
                <strong>prezzo:</strong>
                <br>
                {{ $comic->price }}€
            </p>

            <p> 
                <strong>tipo:</strong>
                <br>
                {{ $comic->type }}
            </p>
        </div>
    </div>
</div>

@endsection