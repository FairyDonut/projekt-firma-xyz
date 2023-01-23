<H1>Użytkownicy:</h1>
    <p><button onclick="location">Dodaj nowego użytkownika</button></p>
    <ul>
        @foreach ($users as $user)
            <li>
                <p><b>Login:</b> {{$user -> login}}</p>
                <p><b>Imię:</b> {{$user -> firstName}}</p>
                <p><b>Nazwisko:</b>{{$user -> lastName}}</p>
                <p><b>Rola:</b>{{$user -> role}}</p>
                <p>
                <a href="/users/{{$user -> id}}">Szczegóły</a>
                <button onclick="location.reload()">Usuń</button>
                </p>
            </li>
        @endforeach
        </ul>
