<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Contador: {{ $contador }}</h1>
    <form action="/incrementar" method="POST">
        @csrf
        <input type="submit" value="Incrementar">
    </form>
    <form action="/decrementar" method="POST">
        @csrf
        <input type="submit" value="Decrementar">
    </form>
</body>
</html>