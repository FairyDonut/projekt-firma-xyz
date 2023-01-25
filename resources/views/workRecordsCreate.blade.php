@extends('layouts.app')

@section('content')
<h1>Dodaj ewidencję pracy</h1>

<form method="POST" action="/workrecords/create">
    @csrf
    <h3>Pracownicy:</h3>

    <label for="sender">Zlecający:</label>
    <select name="sender" id="sender">
        @foreach ($users as $user)
            <option value={{$user->id}}>{{$user->firstName}}</option>
        @endforeach
    </select>

    <label for="worker">Pracownik:</label>
    <select name="worker" id="worker">
        @foreach ($users as $user)
            <option value={{$user->id}}>{{$user->firstName}}</option>
        @endforeach
    </select>

    <h3>Start pracy:</h3>

    <label for="work_start_date">Data:</label>
    <input type="date" name="work_start_date" id="work_start_date" value={{Carbon\Carbon::now()}}>

    <label for="work_start_time">Czas:</label>
    <input type="time" name="work_start_time" id="work_start_time">

    <h3>Koniec pracy:</h3>

    <label for="work_end_date">Data:</label>
    <input type="date" name="work_end_date" id="work_end_date" value={{Carbon\Carbon::now()}}>

    <label for="work_end_time">Czas:</label>
    <input type="time" name="work_end_time" id="work_end_time">

    <p><button type="submit">Zapisz</button></p>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
  </form>
@endsection
