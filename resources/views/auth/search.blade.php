@extends('layouts.app')

@section('content')
<div class="container container-search">
    <form class="search" method="POST" action="{{ route('search') }}">
        @csrf

        <input id="title" type="text" class="form-control" name="search" value="{{ old('search') }}" required autocomplete="search" placeholder="Ruolo ricercato" autofocus>

        <input type="text" class="form-control" id="form-address" name="address" placeholder="Luogo in cui effettuare la ricerca">

        <button type="submit" class="btn btn-primary">
            {{ __('Cerca') }}
        </button>

        <input type="hidden" name="latitude" id="latitude">

        <input type="hidden" name="longitude" id="longitude">
        
    </form>
</div>

@if ($jobs)
<div class="container job-container">
    @foreach ($jobs as $job)
    <div class="job">
        <a href="/lavoro/{{$job->id}}">
            <span class="job-element-title">{{ $job->title }}</span>
            <span class="job-element-content">{{ $job->company->company_name }}</span>
            <span class="job-element-content">{{ $job->address }}, {{ $job->city }}, {{ $job->province }}</span>
        </a>
    </div>
    @endforeach
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
@endsection
