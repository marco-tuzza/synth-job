@extends('layouts.app')

@section('content')
<div class="container form-container">
    <div class="card">
        <div class="card-body">
        <form method="POST" action="/utente/modifica/{{ $data->id }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Data di nascita') }}</label>

                    <div class="col-md-6">
                        <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ $data->birth_date }}" required autocomplete="birth_date" autofocus>
                    </div>
                </div>

                <input id="user_id" type="hidden" name="user_id" value="{{$data->user->id}}">

                <div class="form-group row">
                    <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sesso') }}</label>

                    <div class="col-md-6">
                        <select id="sex" type="select" class="form-control" name="sex" value="{{ $data->sex }}" required autocomplete="sex" autofocus>
                            <option name="sex" value="M">Uomo</option>
                            <option name="sex" value="F">Donna</option>
                            <option name="sex" value="N">Preferisco non specificare</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $data->phone_number }}" required autocomplete="phone_number" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="form-address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                    <div class="col-md-6">
                        <input type="search" class="form-control" id="form-address" name="address" value="{{ $data->address }}" placeholder="Inserisci l'indirizzo della sede di lavoro">
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="form-address2" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="form-address2" name="province" value="{{ $data->province }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="form-city" class="col-md-4 col-form-label text-md-right">{{ __('Città') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="form-city" name="city" value="{{ $data->city }}">
                    </div>
                </div>

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
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
@endsection