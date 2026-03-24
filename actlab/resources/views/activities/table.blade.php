<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<h2>Multiplication Table</h2>

<form method="POST" action="/table/generate">
    @csrf
    Row: <input type="number" name="row" required><br><br>
    Column: <input type="number" name="col" required><br><br>
    <button type="submit">Generate</button>
</form>

@if(isset($table))
    <br>
    @foreach($table as $r)
        @foreach($r as $value)
            {{ $value }}
        @endforeach
        <br>
    @endforeach
@endif

</body>
</html>
