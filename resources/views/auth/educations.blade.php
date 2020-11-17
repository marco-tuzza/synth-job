@extends('layouts.app')

@section('content')
<div class="container form-container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('educations.create') }}">
                @csrf

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titolo conseguito') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="institute" class="col-md-4 col-form-label text-md-right">{{ __('Istituto') }}</label>

                    <div class="col-md-6">
                        <input id="institute" type="text" class="form-control" name="institute" value="{{ old('institute') }}" required autocomplete="institute" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Competenze acquisite') }}</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" required autocomplete="description" autofocus>{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('Data di inzio studi') }}</label>

                    <div class="col-md-6">
                        <input id="start" type="date" class="form-control" name="start" required autocomplete="start">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="end" class="col-md-4 col-form-label text-md-right">{{ __('Data di fine studi') }}</label>

                    <div class="col-md-6">
                        <input id="end" type="date" class="form-control" name="end" required autocomplete="end">
                    </div>
                </div>

                <input id="user_id" type="hidden" name="user_id" value="{{Auth::id()}}">

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Salva') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection