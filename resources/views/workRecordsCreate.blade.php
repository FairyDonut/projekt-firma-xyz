@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1">Dodaj ewidencję czasu pracy</div>
                  <div class="card-body">
                    <form method="POST" action="/workrecords/create">
                        @csrf
                        <div class="row mb-3">
                            <h3 class="text-center">Pracownicy:</h3>
                            <label for="sender" class="col-md-4 col-form-label text-md-end">Zlecający:</label>
                            <div class="col-md-6">
                                <select name="sender" id="sender" class="form-control">
                                    @foreach ($users as $user)
                                        <option value={{$user->id}}>{{$user->firstName}}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="worker" class="col-md-4 col-form-label text-md-end">Pracownik:</label>
                            <div class="col-md-6">
                                <select name="worker" id="worker" class="form-control">
                                    @foreach ($users as $user)
                                        <option value={{$user->id}}>{{$user->firstName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <h3 class="text-center">Start pracy:</h3>
                        <label for="work_start_date" class="col-md-4 col-form-label text-md-end">Data:</label>
                        <div class="col-md-6">
                        <input type="date" name="work_start_date" id="work_start_date" class="form-control" value={{Carbon\Carbon::now()}}>
                        </div>
                        </div>
                        <div class="row mb-3">
                        <label for="work_start_time" class="col-md-4 col-form-label text-md-end">Czas:</label>
                        <div class="col-md-6">
                        <input type="time" name="work_start_time" id="work_start_time" class="form-control">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <h3 class="text-center">Koniec pracy:</h3>
                        <label for="work_end_date" class="col-md-4 col-form-label text-md-end">Data:</label>
                        <div class="col-md-6">
                        <input type="date" name="work_end_date" id="work_end_date" class="form-control" value={{Carbon\Carbon::now()}}>
                        </div>
                        </div>
                        <div class="row mb-3">
                        <label for="work_end_time" class="col-md-4 col-form-label text-md-end">Czas:</label>
                        <div class="col-md-6">
                        <input type="time" name="work_end_time" id="work_end_time" class="form-control">
                        </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Zapisz</button>
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
@endsection
