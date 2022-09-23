<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation con laravel 8</title>
</head>
<body>
    
    <form method='post' action="guardar">
        @csrf
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre">
        @error('nombre')
        <small>
            <strong>{{$message}}</strong>
        </small>
        @enderror

        <br><br>

        <label for="email">EMAIL</label>
        <input type="text" name="email">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>