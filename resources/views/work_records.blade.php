@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex w-100 justify-content-between">
        <div><H1>Czas pracy pracownków:</h1></div>
        <div> @if (Auth::user()->role=="Admin" || Auth::user()->role=="Manager")
            <a href="workrecords/create" class="btn btn-primary">Dodaj czas pracy</a>
            @endif
        </div>
    </div>
</div>
<ul class="list-group">
    @foreach ($lista as $record)
        <li class="list-group-item list-group-item-action d-flex w-100 justify-content-between">
            <p><b>Pracownik: </b> {{$record -> worker -> firstName}}</p>
            <p><b>Rozpoczęcie czasu pracy: </b>{{$record -> work_start}}</p>
            <p><b>Zakończenie czasu pracy: </b>{{$record -> work_end}}</p>
            <p>
            <a href="/workrecords/{{$record -> id}}" class="btn btn-primary">Szczegóły</a>
            <form method="POST" action="/workrecords/{{ $record->id }}/delete">
                @csrf
                @if (Auth::user()->role=="Admin" || Auth::user()->role=="Manager")
                <button type="submit" class="btn btn-primary">Usuń</button>
            @endif
            </form>
            </p>
        </li>
    @endforeach
</ul>
@endsection
