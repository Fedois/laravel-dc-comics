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
                <label for="title" class="form-label">titolo</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="inserisci esempio: batman...">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" name="thumb" class="form-control" id="thumb" placeholder="inserisci esempio: https...">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="inserisci esempio: action comics...">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="inserisci esempio: comic book">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data vendita</label>
                <input type="date" name="sale_date" class="form-control" id="sale_date">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="inserisci esempio: 3.99">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">SALVA</button>
        </form>
    </div>
</main>

@endsection