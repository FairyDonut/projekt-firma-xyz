@extends('layouts.app')

@section('content')
<h1 class="text-center mb-3">Czas pracy dla pracownika: {{$user -> firstName}} {{$user -> lastName}} </h1>
<div class="container text-center">
    <div class="row align-items-start">
      <div class="col border p-3">
       <b> Dane z aktualnego dnia </b>
      </div>
      <div class="col border p-3">
        <b> Dane z tygodnia </b>
      </div>
      <div class="col border p-3">
        <b> Dane z miesiąca </b>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col border p-3">
        {{ $monthRecords }}
      </div>
      <div class="col border p-3">
        {{ $weekRecords }}
      </div>
      <div class="col border p-3">
        {{ $dayRecords }}
      </div>
    </div>
  </div>
@endsection
