@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex w-100 justify-content-between">
        <div><h1>Użytkownicy:</h1></div>
        <div>@if (Auth::user()->role=="Admin" || Auth::user()->role=="Manager")
            <a href="users/create" class="btn btn-primary">Dodaj nowego użytkownika</a>
            @endif
        </div>
    </div>
        <ul class="list-group">
            @foreach ($users as $user)
                <li class="list-group-item list-group-item-action d-flex w-100 justify-content-between">
                    <p><b>Login:</b> {{$user -> login}}</p>
                    <p><b>Imię:</b> {{$user -> firstName}}</p>
                    <p><b>Nazwisko: </b>{{$user -> lastName}}</p>
                    <p><b>Rola:</b>{{$user -> role}}</p>
                    <p>
                    <a href="/users/{{$user -> id}}" class="btn btn-primary">Szczegóły</a>
                    <button onclick="location.reload()" class="btn btn-primary">Usuń</button>
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
