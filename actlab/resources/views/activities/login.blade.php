<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST" action="/login/check">
    @csrf
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

@if(isset($message))
    <h3 style="color: {{ $color }};">{{ $message }}</h3>
@endif

</body>
</html>
