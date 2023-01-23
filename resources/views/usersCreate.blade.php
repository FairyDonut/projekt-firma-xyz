<h1>Dodaj pracownika</h1>
<form method="POST" action="/users/create">
    @csrf
    <p><button type="submit">Dodaj</button></p>
    <p>
    <label for="login">Login:</label>
    <input type="text" name="login" id="login">
    </p>
    <p>
    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password">
    </p>
    <label for="firstName">Imię: </label>
    <input type="text" name="firstName" id="firstName">
    <p>
    <label for="lastName">Nazwisko: </label>
    <input type="text" name="lastName" id="lastName">
    </p>
    <p>
    <label for="role">Rola: </label>
    <input type="text" name="role" id="role">
    </p>
    <p><button type="submit">Zapisz</button></p>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
  </form>

