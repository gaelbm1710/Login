<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenido a la Landing Page</title>
    </head>
    <body >
        <h1>Bienvenido a la Landing Page</h1>
        <p>Esta página es para los usuarios no registrados.</p>
        <p><a href="{{ route('register') }}">Registrate aquí</a></p>
    </body>
</html>
