<h1>Formularz logowania</h1>

<form method="POST" action="/login">
    @csrf

    <label for="login">Login:</label>
    <input type="text" name="login" id="login" />

    <br />

    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password" />

    <p><button type="submit">Zaloguj się</button></p>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
</form>