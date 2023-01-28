@extends('layouts.appLogin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1">Zmień hasło</div>
                  <div class="card-body">
                    <form method="POST" action="/users/{id}/password">
                        @csrf
                        <div class="row mb-3">
                            <label for="password1" class="col-md-4 col-form-label text-md-end">Nowe hasło:</label>
                            <div class="col-md-6">
                            <input type="password" name="password1" id="password1" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password2" class="col-md-4 col-form-label text-md-end">Powtórz hasło:</label>
                            <div class="col-md-6">
                            <input type="password" name="password2" id="password2" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                             <button type="submit" class="btn btn-primary">Zmień hasło</button>
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
