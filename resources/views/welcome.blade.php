<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Paulo</title>

</head>

<body>
    <h1>Retornando ao PHP utilizando Láravel</h1>
    <p>Data atual: {{ \carbon\carbon::now()->format('d/m/Y H:i:s') }}</p>
</body>

</html>