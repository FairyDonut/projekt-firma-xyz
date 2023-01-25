@extends('layouts.appLogin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1">Zaloguj się do firmy  XYZ</div>
                  <div class="card-body">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">Login:</label>
                            <div class="col-md-6">
                            <input type="text" name="login" id="login" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Hasło:</label>
                            <div class="col-md-6">
                            <input type="password" name="password" id="password" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                             <button type="submit" class="btn btn-primary">Zaloguj się</button>
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
