@extends('layouts.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="container form-container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('job.create') }}">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titolo offerta') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                    <div class="col-md-6">
                        <select id="category_id" type="select" class="form-control" name="category_id" required autocomplete="category_id"> 
                            @foreach ($categories as $category)
                                <option name="category_id" value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrizione') }}</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>
                    </div>
                </div>

                <input type="hidden" name="company_id" value="1">

                <div class="form-group row">
                    <label for="form-address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                    <div class="col-md-6">
                        <input type="search" class="form-control" id="form-address" name="address" placeholder="Inserisci l'indirizzo della sede di lavoro">
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="form-address2" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="form-address2" name="province">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="form-city" class="col-md-4 col-form-label text-md-right">{{ __('Città') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="form-city" name="city">
                    </div>
                </div>

                <input type="hidden" name="latitude" id="latitude">

                <input type="hidden" name="longitude" id="longitude">

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Inserisci offerta!') }}
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
@endsection