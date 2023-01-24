<H1>Czas pracy pracownków:</h1>
<a href="workrecords/create">Dodaj czas pracy</a>
<ul>
    @foreach ($lista as $record)
        <li>
            <p><b>Pracownik:</b> {{$record -> worker -> firstName}}</p>
            <p><b>Rozpoczęcie czasu pracy:</b>{{$record -> work_start}}</p>
            <p><b>Zakończenie czasu pracy:</b>{{$record -> work_end}}</p>
            <p>
            <a href="/workrecords/{{$record -> id}}">Szczegóły</a>
            <form method="POST" action="/workrecords/{{ $record->id }}/delete">
                @csrf
                <button type="submit">Usuń</button>
            </form>
            </p>
        </li>
    @endforeach
</ul>
