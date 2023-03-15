@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')
<div id="main-comics">
    
    <div class="load text-center p-5">
        <button>
            <a href="{{ route('comics.index') }}" class="p-2">VEDI TUTTI I COMICS</a>
        </button>
    </div>

</div>

@endsection
