@extends('layouts.app')

@section('content')
<div class="profile-container">
    @if ($user->role == 1)
        <h2 class="profile-title">{{ $user->first_name }} {{ $user->last_name }} </h2>
    
        <div class="card card-profile">
            <h2>Dati personali</h2>
            <div class="personal-container">
                <div class="personal-profile">
                    <span class="personal-title">Sesso:</span>
                    <span class="personal-content">{{$user->worker->sex}}</span>
                </div>
                <div class="personal-profile">
                    <span class="personal-title">Data di nascita:</h3>
                    <span class="personal-content">{{$user->worker->birth_date}}</span>
                </div>
                <div class="personal-profile">
                    <span class="personal-title">Contatti:</h3>
                        <span class="personal-content">{{$user->worker->phone_number}}</span>
                            <span class="personal-content">{{ $user->email }}</span>
                </div>
                <div class="personal-profile">
                    <span class="personal-title">Indirizzo di residenza:</span>
                    <span class="personal-content">{{$user->worker->address}}, {{$user->worker->province}}, {{$user->worker->city}}</span>
                </div>
            </div> 
            <a href="/utente/modifica/{{$user->worker->id}}">Modifica i tuoi dati</a>
        </div> 
        <div class="card card-profile">
            <h2>Esperienze lavorative</h2>      
            @if ($user->experience)
            @foreach ($user->experience as $job)
            <a href="/esperienza/modifica/{{$job->id}}">
                <div class="profile-element">
                    <span class="profile-element-title">{{$job->title}}</span>
                    <span class="personal-content">{{$job->company}}</span>
                    <span class="personal-content">{{$job->description}}</span>
                    <span class="personal-content">Inizio: {{$job->start}}</span>
                    <span class="personal-content">Fine: {{$job->end}}</span>
                </div>
            </a>
            @endforeach
            @else
            <h2>Nessuna esperienza</h2>
            @endif
            <a href="{{ route('experiences.show') }}">Aggiungi esperienza lavorativa</a>
        </div>
        <div class="card card-profile">
            <h2>Competenze</h2>
            @if ($user->skill)
            <div class="profile-competence-container">
                @foreach ($user->skill as $skill)
                <div class="profile-competence">
                <span>{{$skill->title}} <i class="fas fa-circle level-{{$skill->level}}"></i></span>
                </div>
                @endforeach
            </div>
            @else
                <h3>Nessuna competenza specificata</h3>
            @endif
            <a href="{{route('skills.show')}}">Aggiungi una competenza</a>
            <a href="{{route('skills.edit')}}">Modifica competenze</a>
        </div>
        <div class="card card-profile">
            <h2>Istruzione</h2>
            @if ($user->education)
            @foreach ($user->education as $school)
            <a href="/istruzione/modifica/{{$school->id}}">
                <div class="profile-element">
                    <span class="profile-element-title">{{$school->title}}</span>
                    <span class="personal-content">{{$school->institute}}</span>
                    <span class="personal-content">{{$school->description}}</span>
                    <span class="personal-content">Inizio: {{$school->start}}</span>
                    <span class="personal-content">Fine: {{$school->end}}</span>
                </div>
            </a>
            @endforeach
            @else
            <h2>Nessuna esperienza</h2>
            @endif
            <a href="{{route('educations.show')}}">Aggiungi un titolo di studio</a>
        </div>
    </div>
    @else 

    <h2 class="profile-title">{{ $user->company->company_name }} </h2>
    <div class="card card-profile">
        <h2>Dati azienda</h2>
        <div class="personal-container">
            <div class="personal-profile">
                <span class="personal-title">Numero di contatto:</h3>
                <span class="personal-content">{{$user->company->phone_number}}</span>
            </div>
            <div class="personal-profile">
                <span class="personal-title">Partita IVA:</h3>
                <span class="personal-content">{{$user->company->p_iva}}</span>
            </div>
            <div class="personal-profile">
                <span class="personal-title">Descrizione:</h3>
                <span class="personal-content">{{$user->company->description}}</span>
            </div>
            <div class="personal-profile">
                <span class="personal-title">Indirizzo:</span>
                <span class="personal-content">{{$user->company->address}}, {{$user->company->province}}, {{$user->company->city}}</span>
            </div>
        </div>
        <a href="/azienda/modifica/{{$user->company->id}}">Modifica dati aziendali</a>
    </div> 
        <div class="card card-profile">
            <h2>Posizioni aperte:</h2>
            @foreach ($user->company->job as $job)
                <a href="/lavoro/{{$job->id}}">
                    <div class="profile-element">
                        <span class="profile-element-title">{{$job->title}}</span>
                        <span>{{$job->company_name}}</span>
                        <span>{{$job->description}}</span>
                    </div>
                </a>
            @endforeach
        </div>
        <a class="btn btn-primary" href="{{ route('job') }}">Inserisci una nuova offerta di lavoro</a>
     @endif
@endsection