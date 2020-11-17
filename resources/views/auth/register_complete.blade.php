@extends('layouts.app')

@section('content')
@if ($user->role == 1)
<div class="container form-container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('register.complete.worker') }}">
                @csrf

                <div class="form-group row">
                    <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Data di nascita') }}</label>

                    <div class="col-md-6">
                        <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>
                    </div>
                </div>

                <input id="user_id" type="hidden" name="user_id" value="{{$user->id}}">

                <div class="form-group row">
                    <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sesso') }}</label>

                    <div class="col-md-6">
                        <select id="sex" type="select" class="form-control" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus>
                            <option name="sex" value="M">Uomo</option>
                            <option name="sex" value="F">Donna</option>
                            <option name="sex" value="N">Preferisco non specificare</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="form-address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                    <div class="col-md-6">
                        <input type="search" class="form-control" id="form-address" name="address" placeholder="Inserisci l'indirizzo della sede di lavoro" required>
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="form-address2" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="form-address2" name="province" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="form-city" class="col-md-4 col-form-label text-md-right">{{ __('Città') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="form-city" name="city" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrati') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="container form-container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('register.complete.company') }}">
                @csrf

                <div class="form-group row">
                    <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome della tua azienda') }}</label>

                    <div class="col-md-6">
                        <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <input id="user_id" type="hidden" name="user_id" value="{{$user->id}}">

                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="p_iva" class="col-md-4 col-form-label text-md-right">{{ __('Partita IVA') }}</label>

                    <div class="col-md-6">
                        <input id="p_iva" type="text" class="form-control" name="p_iva" value="{{ old('p_iva') }}" required autocomplete="p_iva">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrizione dell\'azienda') }}</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>
                    </div>
                </div>

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

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrati') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
@endsection