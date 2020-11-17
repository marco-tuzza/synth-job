@extends('layouts.app')

@section('content')
<div class="container form-container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/istruzione/modifica/{{$education->id}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Manzione ricoperta') }}</label>
    
                    <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="{{ $education->title }}" required autocomplete="title" autofocus>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Azienda') }}</label>
    
                    <div class="col-md-6">
                        <input id="company" type="text" class="form-control" name="company" value="{{ $education->institute }}" required autocomplete="company" autofocus>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrizione') }}</label>
    
                    <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" required autocomplete="description" autofocus>{{ $education->description }}</textarea>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('Data di inzio esperienza') }}</label>
    
                    <div class="col-md-6">
                        <input id="start" type="date" class="form-control" name="start" value="{{$education->start}}" required autocomplete="start">
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="end" class="col-md-4 col-form-label text-md-right">{{ __('Data di fine esperienza') }}</label>
    
                    <div class="col-md-6">
                        <input id="end" type="date" class="form-control" name="end" value="{{$education->end}}" autocomplete="end">
                    </div>
                </div>
    
                <input id="user_id" type="hidden" name="user_id" value="{{Auth::id()}}">
    
                <div class="form-group row mb-0">
                    <div class="col-md-3 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Salva') }}
                        </button>
                </div>
            </form>
                <form class="col-md-3" action="/istruzione/{{$education->id}}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-small btn-danger" value="Elimina">
                        Elimina
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection