<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ordenes</title>
        @include('partials.links')
    </head>

    <body>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <h1 class="text-center display-4">Listado de ordenes</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id}}</th>
                    <td>{{ $order->customer_name}}</td>
                    <td>{{ $order->customer_email}}</td>
                    <td>{{ $order->customer_mobile}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('orders.show', $order)}}">Ver Orden</a>
                    </td>
                </tr>

                @empty
                <h2>No hay ordenes</h2>
                @endforelse

            </tbody>
        </table>
    </body>

</html>
