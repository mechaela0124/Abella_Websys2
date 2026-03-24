<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST" action="/register/submit">
    @csrf

    Firstname: <input type="text" name="firstname" required><br><br>
    Middlename: <input type="text" name="middlename" required><br><br>
    Lastname: <input type="text" name="lastname" required><br><br>
    Address: <input type="text" name="address" required><br><br>
    Birthdate: <input type="date" name="birthdate" required><br><br>

    <button type="submit">Register</button>
</form>

@if(isset($fname))
    <hr>
    <h3>
        Your name is {{ $fname }} {{ $mname }} {{ $lname }}
        from {{ $address }}
        birthday on {{ $birthdate }}
    </h3>
@endif

</body>
</html>
