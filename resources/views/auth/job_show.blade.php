@extends('layouts.app')

@section('content')
<div class="container form-container">
    <div class="card card-profile">
        <span class="profile-element-title">{{$job->title}}</span>
        <span class="profile-element">{{$job->description}}</span>
        <span class="profile-element-address">{{$job->address}}, {{$job->province}}, {{$job->city}}</span>
        @if ($job->company->user->id != $user->id)
        <a class="btn btn-primary" href="/application/{{Auth::id()}}/{{$job->id}}">Invia candidatura</a>
        @endif
    </div>
    @if ($job->company->user->id == $user->id)
    <div class="card card-profile">
        <h2>Lista candidati:</h2>
        @foreach ($job->application as $application)
        <a href="/profilo/{{$application->user->id}}">
            <span class="candidate">{{$application->user->first_name}} {{$application->user->last_name}}</span>
        </a>
        @endforeach
    </div>
    @endif
</div>
@endsection