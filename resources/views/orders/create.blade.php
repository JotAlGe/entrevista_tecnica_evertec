<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nueva solicitud</title>
        @include('partials.links')
    </head>

    <body>
        {{-- alert --}}
        @if (session('warning'))
        <div class="alert alert-danger" role="alert">
            {{session('warning')}}
        </div>
        @endif

        <h1 class="display-4 text-center">Nueva Orden</h1>

        {{-- form --}}
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="customer_name" autofocus>
                        @error('customer_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" name="customer_email">

                        @error('customer_email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Celular</label>
                        <input type="tel" class="form-control" id="exampleInputPassword2" name="customer_mobile">

                        @error('customer_mobile')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="/" class="link-danger">Volver</button>
                </form>
            </div>
        </div>



    </body>

</html>
