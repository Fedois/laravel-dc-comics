@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')

<main class="bg-dark p-3">
    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mb-3">
        torna indietro
    </a>

    <div class="container bg-white p-3">
        <h1 class="text-center">Modifica Comic</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf

            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">titolo</label>
                <input required type="text" name="title" class="form-control" id="title" placeholder="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input required type="text" name="thumb" class="form-control" id="thumb" placeholder="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input required type="text" name="series" class="form-control" id="series" placeholder="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input required type="text" name="type" class="form-control" id="type" placeholder="{{ $comic->type }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data vendita</label>
                <input required type="text" name="sale_date" class="form-control" id="sale_date" placeholder="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input required type="text" name="price" class="form-control" id="price" placeholder="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">SALVA MODIFICHE</button>
        </form>
    </div>
</main>

@endsection