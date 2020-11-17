@extends('layouts.app')

@section('content')
<div class="container-title">
    <form class="search-welcome" method="POST" action="{{ route('search') }}">
        @csrf

        <input id="title" type="text" class="form-control" name="search" value="{{ old('search') }}" required autocomplete="search" placeholder="Ruolo ricercato" autofocus>

        <input type="text" class="form-control" id="form-address" name="address" placeholder="Luogo in cui effettuare la ricerca">

        <button type="submit" class="btn btn-primary">
            {{ __('Cerca') }}
        </button>

        <input type="hidden" name="latitude" id="latitude">

        <input type="hidden" name="longitude" id="longitude">
        
    </form>
    <h1>Il posto giusto per trovare il tuo prossimo <span>lavoro</span></h1>
    <form action=""></form>
</div>
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
@endsection