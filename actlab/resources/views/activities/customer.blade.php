<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Customer View</h2>

<label>Customer ID:</label>
<input type="text" value="{{ $custid }}"><br><br>

<label>Name:</label>
<input type="text" value="{{ $name }}"><br><br>

<label>Address:</label>
<input type="text" value="{{ $address }}"><br><br>

<a href="/">Back</a>
</body>
</html>
