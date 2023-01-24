<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma XYZ</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Strona główna</a>
            <a href="/login">Zaloguj się</a>
            <a href="/workrecords">Czas pracy pracowników</a>
            <a href="/users">Użytkownicy</a>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>Projekt aplikacji firmy XYZ - Julianna Górska</p>
    </footer>
    </body>
    </html>
