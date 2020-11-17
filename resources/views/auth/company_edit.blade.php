@extends('layouts.app')

@section('content')
<div class="container form-container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/azienda/modifica/{{ $data->id }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome della tua azienda') }}</label>

                    <div class="col-md-6">
                        <input id="company_name" type="text" class="form-control" name="company_name" value="{{ $data->company_name }}" required autocomplete="company_name" autofocus>
                    </div>
                </div>

                <input id="user_id" type="hidden" name="user_id" value="{{$data->user->id}}">

                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $data->phone_number }}" required autocomplete="phone_number" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="p_iva" class="col-md-4 col-form-label text-md-right">{{ __('Partita IVA') }}</label>

                    <div class="col-md-6">
                        <input id="p_iva" type="text" class="form-control" name="p_iva" value="{{ $data->p_iva }}" required autocomplete="p_iva">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrizione dell\'azienda') }}</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" required>{{ $data->description }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="form-address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                    <div class="col-md-6">
                        <input type="search" class="form-control" id="form-address" name="address" placeholder="Inserisci l'indirizzo della sede di lavoro" value="{{ $data->address }}">
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