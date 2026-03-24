<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Order details</h2>

<label>Trans #:</label>
<input type="text" value="{{ $transno }}"><br><br>

<label>Order #:</label>
<input type="text" value="{{ $orderno }}"><br><br>

<label>Item ID:</label>
<input type="text" value="{{ $itemid }}"><br><br>

<label>Name:</label>
<input type="text" value="{{ $name }}"><br><br>

<label>Price:</label>
<input type="text" value="{{ $price }}"><br><br>

<label>QTY:</label>
<input type="text" value="{{ $qty }}"><br><br>

<a href="/">Back</a>
</body>
</html>
