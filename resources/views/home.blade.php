<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Site</title>
        @include('partials.links')

    </head>

    <body>

        <h1 class="text-center">Generar una nueva orden</h1>
        <a href="{{ route('orders.create')}}">Generar una nueva orden</a>
    </body>

</html>
