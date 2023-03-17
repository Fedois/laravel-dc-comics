@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')

<main class="bg-dark p-3">
    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mb-3">
        torna indietro
    </a>

    <div class="container bg-white p-3">
        <h1 class="text-center">Modifica Comic</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> -> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf

            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label @error('title') text-danger @enderror">titolo</label>
                <input type="text" name="title" class="form-control @error('title') border border-danger @enderror" id="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label @error('thumb') text-danger @enderror">Immagine</label>
                <input type="text" name="thumb" class="form-control @error('thumb') border border-danger @enderror" id="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label @error('series') text-danger @enderror">Series</label>
                <input type="text" name="series" class="form-control @error('series') border border-danger @enderror" id="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label @error('type') text-danger @enderror">tipo</label>
                <input type="text" name="type" class="form-control @error('type') border border-danger @enderror" id="type" value="{{ $comic->type }}">
            </div>

            
            <div class="mb-3">
                <label for="sale_date" class="form-label @error('sale_date') text-danger @enderror">Data vendita</label>
                <input type="date" name="sale_date" class="form-control @error('sale_date') border border-danger @enderror" id="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label @error('price') text-danger @enderror">prezzo</label>
                <input type="text" name="price" class="form-control @error('price') border border-danger @enderror" id="price" value="{{ $comic->price }}">
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