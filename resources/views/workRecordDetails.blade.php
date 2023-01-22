<h1>Szczegóły ewidencji pracownika</h1>
<form method="POST" action="/workrecords/{{$showdata->id}}">
    @csrf
    <h3>Pracownicy:</h3>

    <label for="sender">Zlecający:</label>
    <select name="sender" id="sender">
        @foreach ($users as $user)
        @if ($user->id == $showdata->sender->id)
        <option value={{$user->id}} selected>{{$user->name}}</option>
    @else
        <option value={{$user->id}}>{{$user->name}}</option>
    @endif
        @endforeach
    </select>

    <label for="worker">Pracownik:</label>
    <select name="worker" id="worker">
        @foreach ($users as $user)\
            @if ($user->id == $showdata->worker->id)
                <option value={{$user->id}} selected>{{$user->name}}</option>
            @else
                <option value={{$user->id}}>{{$user->name}}</option>
            @endif
        @endforeach
    </select>

    <h3>Star pracy:</h3>
    <label for="work_start_date">Data:</label>
    <input type="date" name="work_start_date" id="work_start_date" value={{Carbon\Carbon::parse($showdata->work_start)}}>
    <label for="work_start_time">Czas:</label>
    <input type="time" name="work_start_time" id="work_start_time" value={{Carbon\Carbon::parse($showdata->work_start)->format('H:i')}}>

    <h3>Koniec pracy:</h3>
    <label for="work_end_date">Data:</label>
    <input type="date" name="work_end_date" id="work_end_date" value={{Carbon\Carbon::parse($showdata->work_end)}}>

    <label for="work_end_time">Czas:</label>
    <input type="time" name="work_end_time" id="work_end_time" value={{Carbon\Carbon::parse($showdata->work_end)->format('H:i')}}>

    <p><button type="submit">Edytuj</button></p>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
  </form>

