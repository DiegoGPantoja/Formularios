<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

    <title>Laravel Validacion de Formularios</title>
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <h2 class="text-center mt-4">Laravel 8 - Validacion de Formularios</h2>

            <div class="col-lg6 col-12 mx-auto">
                <!-- Mensaje de que los campos han sido validos --> 
                @if(Session::has('success'))
                <div class="alert alert-success text-center">
                {{Session::get('success')}}
                </div>
                @endif
            </div>
            
            <div class="p-5 bg-white rounded shadow-lg">
                <form method='post' action="guardar" novalidate>
                    @csrf

                    <div class="form-group mb-2">
                        <label>Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{old('nombre')}}">
                        @error('nombre')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"  value="{{old('email')}}">
                        @error('email')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label>Edad</label>
                        <input type="text" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{old('edad')}}">
                        @error('edad')
                        
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label>Password</label>
                        <input type="password" class="form-control @error('pass') is-invalid @enderror" name="pass" id="pass" value="{{old('pass')}}">
                        @error('pass')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control @error('pass_confirmation') is-invalid @enderror" name="pass_confirmation" id="pass_confirmation" value="{{old('pass_confirmation')}}">
                        @error('pass_confirmation')
                            <span class="invalid-feedback">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-grid mt-3">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                </form>


            </div>




        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>