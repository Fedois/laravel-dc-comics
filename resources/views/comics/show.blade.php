@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')

<div class="container-single-card bg-dark p-5">
    <a href="{{ route('comics.index') }}" class="btn btn-primary mb-3">
        torna indietro
    </a>

    <div class="box bg-white d-flex p-3">
        <div class="content-sx w-25">
            <img src="{{ $comic->thumb }}" alt="comic">
            {{-- <img src="{{ vite::asset('resources/img/adv.jpg') }}" alt="comic"> --}}
            
            <h1>{{ $comic->title }}</h1>

            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                modifica
            </a>

            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method('delete')
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma Eliminazione</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare? se confermi non puoi più tornare indietro
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Confermo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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