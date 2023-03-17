@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')

<main class="bg-dark p-3">
    <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">
        torna indietro
    </a>

    <div class="container bg-white p-3">
        <h1 class="text-center">Aggiungi Comic</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> -> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label @error('title') text-danger @enderror">titolo</label>
                <input type="text" name="title" class="form-control @error('title') border border-danger @enderror" id="title" value="{{ old('title') }}" placeholder="inserisci esempio: batman...">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label @error('thumb') text-danger @enderror">Immagine</label>
                <input type="text" name="thumb" class="form-control  @error('thumb') border border-danger @enderror" id="thumb" value="{{ old('thumb') }}" placeholder="inserisci esempio: https...">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label @error('series') text-danger @enderror">Series</label>
                <input type="text" name="series" class="form-control  @error('series') border border-danger @enderror" id="series" value="{{ old('series') }}" placeholder="inserisci esempio: action comics...">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label @error('type') text-danger @enderror">tipo</label>
                <input type="text" name="type" class="form-control  @error('type') border border-danger @enderror" id="type" value="{{ old('type') }}" placeholder="inserisci esempio: comic book">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label @error('sale_date') text-danger @enderror">Data vendita</label>
                <input type="date" name="sale_date" class="form-control  @error('sale_date') border border-danger @enderror" id="sale_date" value="{{ old('sale_date') }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label @error('price') text-danger @enderror">prezzo</label>
                <input type="text" name="price" class="form-control  @error('price') border border-danger @enderror" id="price" value="{{ old('price') }}" placeholder="inserisci esempio: 3.99">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">SALVA</button>
        </form>
    </div>
</main>

@endsection