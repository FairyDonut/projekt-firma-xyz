@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1 text-center">Szczegóły ewidencji pracownika</div>
                  <div class="card-body">
                        <form method="POST" action="/workrecords/{{ $showdata->id }}">
                            @csrf
                            <div class="row mb-3">
                                    <h3 class="text-center">Wybierz pracownika:</h3>
                                    <label for="sender" class="col-md-4 col-form-label text-md-end">Zlecający:</label>
                                    <div class="col-md-6">
                                        <select name="sender" id="sender" class="form-control">
                                            @foreach ($users as $user)
                                                @if ($user->id == $showdata->sender->id)
                                                    <option value={{ $user->id }} selected>{{ $user->firstName }}</option>
                                                @else
                                                    <option value={{ $user->id }}>{{ $user->firstName }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="worker" class="col-md-4 col-form-label text-md-end">Pracownik:</label>
                                <div class="col-md-6">
                                    <select name="worker" id="worker" class="form-control">
                                        @foreach ($users as $user)

                                            @if ($user->id == $showdata->worker->id)
                                                <option value={{ $user->id }} selected>{{ $user->firstName }}</option>
                                            @else
                                                <option value={{ $user->id }}>{{ $user->firstName }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <h3 class="text-center">Start pracy:</h3>
                                <label for="work_start_date" class="col-md-4 col-form-label text-md-end">Data:</label>
                                <div class="col-md-6">
                                    <input type="date" name="work_start_date" id="work_start_date" class="form-control"
                                        value={{ Carbon\Carbon::parse($showdata->work_start) }}>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="work_start_time" class="col-md-4 col-form-label text-md-end">Czas:</label>
                                <div class="col-md-6">
                                <input type="time" name="work_start_time" id="work_start_time" class="form-control"
                                    value={{ Carbon\Carbon::parse($showdata->work_start)->format('H:i') }}>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <h3 class="text-center">Koniec pracy:</h3>
                                <label for="work_end_date" class="col-md-4 col-form-label text-md-end">Data:</label>
                                <div class="col-md-6">
                                    <input type="date" name="work_end_date" id="work_end_date" class="form-control"
                                        value={{ Carbon\Carbon::parse($showdata->work_end) }}>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="work_end_time" class="col-md-4 col-form-label text-md-end">Czas:</label>
                                <div class="col-md-6">
                                <input type="time" name="work_end_time" id="work_end_time" class="form-control"
                                    value={{ Carbon\Carbon::parse($showdata->work_end)->format('H:i') }}>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    @if (Auth::user()->role=="Admin" || Auth::user()->role=="Manager")
                                    <button type="submit" class="btn btn-primary">Edytuj</button>
                                    @endif
                                </div>
                            </div>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 clas="text-center">Komentarze:</h3>
            <div class="card">
                <ul class="list-group">
                @foreach ($comments as $comment)
                    <li class="list-group-item"><b>{{ $comment->user->login }}:</b> {{ $comment->comment }}</li>
                @endforeach
                </ul>
            </div>
            <form method="POST" action="/workrecords/{{ $showdata->id }}/comment" class="form-inline mt-3">
                @csrf
                <div class="row">
                    <div class="col-10">
                    <input type="text" name="comment" id="comment" placeholder="Dodaj komentarz" class="form-control"/>
                </div>
                <div class="col d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
