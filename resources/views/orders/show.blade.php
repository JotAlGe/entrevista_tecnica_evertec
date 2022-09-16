<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalle de orden</title>
        @include('partials.links')
    </head>

    <body>
        <h1 class="text-center">Detalle de orden</h1>
        <div class="panel panel-primary">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nro</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Generada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->customer_email }}</td>
                        <td>{{ $order->customer_mobile }}</td>
                        <td>{{ $order->created_at->diffForHumans() }}</td>

                    </tr>

                </tbody>
            </table>
            <a href="{{ route('orders.index') }}" class="btn btn-danger">Volver</a>
        </div>
    </body>

</html>
