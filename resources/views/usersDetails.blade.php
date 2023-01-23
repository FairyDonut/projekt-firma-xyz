<h1>Szczegóły pracownika</h1>
<form method="POST" action="/users/{{$showdata->id}}">
    @csrf
    <p><button type="submit">Dodaj</button></p>
    <p>
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" value="{{$showdata->login}}">
    </p>
    <label for="firstName">Imię: </label>
    <input type="text" name="firstName" id="firstName" value="{{$showdata->firstName}}">
    <p>
    <label for="lastName">Nazwisko: </label>
    <input type="text" name="lastName" id="lastName" value="{{$showdata->lastName}}">
    </p>
    <p>
    <label for="role">Rola: </label>
    <input type="text" name="role" id="role" value="{{$showdata->role}}">
    </p>

    <p><button type="submit">Edytuj</button></p>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
  </form>

