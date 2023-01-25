@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header h1">Szczegóły pracownika {{$showdata->firstName}} {{$showdata->lastName}}</div>
              <div class="card-body">
                <form method="POST" action="/users/{{$showdata->id}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="login" class="col-md-4 col-form-label text-md-end">Login:</label>
                        <div class="col-md-6">
                        <input type="text" name="login" id="login" value="{{$showdata->login}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="firstName" class="col-md-4 col-form-label text-md-end">Imię: </label>
                        <div class="col-md-6">
                        <input type="text" name="firstName" id="firstName" value="{{$showdata->firstName}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastName" class="col-md-4 col-form-label text-md-end">Nazwisko: </label>
                        <div class="col-md-6">
                        <input type="text" name="lastName" id="lastName" value="{{$showdata->lastName}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="role" class="col-md-4 col-form-label text-md-end">Rola: </label>
                        <div class="col-md-6">
                        <input type="text" name="role" id="role" value="{{$showdata->role}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4 mb-2">
                         <button type="submit" class="btn btn-primary">Edytuj</button>
                        </div>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                </form>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                     <a href="users/changepassword" class="btn btn-primary">Zmień hasło</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
