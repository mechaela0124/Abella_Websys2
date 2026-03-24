<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even</title>
</head>
<body>

<h2>Odd or Even Checker</h2>

<form method="POST" action="/number/check">
    @csrf
    <input type="number" name="number" required>
    <button type="submit">Check</button>
</form>

@if(isset($result))
    <h3>{{ $result }}</h3>
@endif

</body>
</html>
