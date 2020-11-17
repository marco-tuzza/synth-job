@extends('layouts.app')

@section('content')
<div class="container form-container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('skills.create') }}">
                @csrf

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Competenza') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Livello') }}</label>

                    <div class="col-md-6">
                        <select class="form-controll" name="level" id="level">
                            <option value="1">Basso</option>
                            <option value="2">Medio</option>
                            <option value="3">Alto</option>
                        </select>
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