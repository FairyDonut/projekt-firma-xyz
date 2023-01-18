<H1>Czas pracy pracownków:</h1>
<ul>
    @foreach ($lista as $record)
        <li>
            <p><b>Pracownik:</b> {{$record -> worker -> name}}</p>
            <p><b>Rozpoczęcie czasu pracy:</b>{{$record -> work_start}}</p>
            <p><b>Zakończenie czasu pracy:</b>{{$record -> work_end}}</p>
            <p>
            <a href="/workrecords/{{$record -> id}}">Szczegóły</a>
            <button onclick="location.reload()">Usuń</button>
            </p>
        </li>
    @endforeach
</ul>
