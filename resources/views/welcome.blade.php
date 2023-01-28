@extends('layouts.app')

@section('content')
<div id="container">
    <h1 class="text-center mb-4">Witamy w panleu firmy XYZ!</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Witamy w panelu firmy XYZ!</h5>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="/logout" class="btn btn-primary">Wyloguj się</a></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ewidencja czasu pracy w jednym miejscu!</h5>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p><a href="/workrecords" class="btn btn-primary">Ewidencja czasu pracy</a></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Dodaj nowych pracowników do firmy!</h5>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>@if (Auth::user()->role=="Admin" || Auth::user()->role=="Manager")
                <a href="/users/create" class="btn btn-primary">Dodaj pracownika</a></p>
                @else <p class="btn btn-danger">Nie masz uprawnień, zgłoś się do administratora</p>
                @endif
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Dodaj ewidencję czasu pracy!</h5>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p>@if (Auth::user()->role=="Admin" || Auth::user()->role=="Manager")
                <p><a href="/workrecords/create" class="btn btn-primary">Dodaj ewidencję czasu pracy</a></p>
                @else <p class="btn btn-danger">Nie masz uprawnień, zgłoś się do administratora</p>
                @endif
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
