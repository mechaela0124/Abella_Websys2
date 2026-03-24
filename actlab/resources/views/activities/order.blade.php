<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Order View</h2>

<label>Customer ID:</label>
<input type="text" value="{{ $custid }}"><br><br>

<label>Name:</label>
<input type="text" value="{{ $name }}"><br><br>

<label>Order #:</label>
<input type="text" value="{{ $orderno }}"><br><br>

<label>Date:</label>
<input type="text" value="{{ $date }}"><br><br>

<a href="/">Back</a>
</body>
</html>
