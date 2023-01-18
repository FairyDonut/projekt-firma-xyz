<form method="POST" action="/workrecords/create">
    @csrf
    <h3>Start pracy:</h3>
    <label for="">Pracownik:</label>
    <input type="number" name="number" id="number">
    <label for="date">Data:</label>
    <input type="date" name="date" id="date">

    <label for="time">Czas:</label>
    <input type="time" name="time" id="time">

    <h3>Koniec pracy:</h3>
    <label for="">Pracownik:</label>
    <input type="number" name="number" id="number">
    <label for="date">Data:</label>
    <input type="date" name="date" id="date">

    <label for="time">Czas:</label>
    <input type="time" name="time" id="time">
    <p><button type="submit">Wyślij</button></p>
  </form>
