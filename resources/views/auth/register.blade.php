{{-- <form action="{{ route('register') }}" method="post">
@csrf
<label>
    Name:
    <input type="text" name="name">
</label>
<label>
    Email:
    <input type="email" name="email">
</label>
<label>
    Password:
    <input type="password" name="password">
</label>
<label>
    Password Confirmation:
    <input type="password" name="password_confirmation">
</label>
<input type="submit" value="Register">
</form> --}}
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Registro</h1>
                            <p class="lead">
                                Crea un nuevo usuario
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Andrew Jones"
                                            class="img-fluid rounded-circle" width="132" height="132">
                                    </div>
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control form-control-lg" type="text"
                                                value="{{ old('name')}}" name="name" placeholder="Ingresa tu nombre...">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Correo:</label>
                                            <input class="form-control form-control-lg" type="email"
                                                value="{{ old('email')}}" name="email" placeholder="Ingresa tu correo">
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Ingresa una contraseña">
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Repetir contraseña</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="password_confirmation" placeholder="Ingresa una contraseña">
                                            @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <div class="custom-control custom-checkbox align-items-center">
                                                <small>Ya tienes cuenta ingresa desde <a
                                                        href="{{ route('login')}}">aquí</a>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
