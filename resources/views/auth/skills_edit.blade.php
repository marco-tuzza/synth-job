@extends('layouts.app')

@section('content')
<div class="form form-container">
    <div class="card card-profile">
        <h2>Modifica Competenze</h2>
        @if ($user->skill)
        <div class="profile-competence-container">
            @foreach ($user->skill as $skill)
            <div class="profile-competence">
            <span>{{$skill->title}} <i class="fas fa-circle level-{{$skill->level}}"></i></span>
            </div>
            <form class="d-inline" action="/competenza/{{$skill->id}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-small btn-danger" value="Elimina">
            </form>
            @endforeach
        </div>
        @endif
        <a href="/profilo">Torna al profilo</a>
    </div>
</div>
@endsection