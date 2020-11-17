@extends('layouts.app')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="choice-container">
    <div class="choice-container-title">
      <h2 class="choice-title">Scegli la tua <span>categoria</span>:</h2>
    </div>  
  <div class="container-effect">
    <div class="box">
      <div class="boxContent">
        <h1 class="title">Sono un privato</h1>
        <i class="fas fa-briefcase icon"></i>
      </div>
      <a href="{{ route('register') }}"></a>
    </div>
    <div class="box">
      <div class="boxContent">
        <h1 class="title">Sono un'azienda</h1>
        <i class="fas fa-building icon"></i>
      </div>
      <a href="{{ route('register.company') }}"></a>
    </div>
  </div>
</div>

@endsection