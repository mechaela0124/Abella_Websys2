<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">Student Portal</span>

    @if(session('user'))
        <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
    @endif
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
