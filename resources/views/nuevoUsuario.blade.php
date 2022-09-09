<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
<h1>NUEVO USUARIO</h1>
<form action={{route('usuarios.create')}} method="post">
    @csrf
        E-mail <input type="text" name="email"> <br />
        Password <input type="password" name="password"> <br />
        <br><br>
        Nombre <input type="text" name="name"> <br />
        Apellido <input type="text" name="apellido"> <br /><br>
        <input type="submit" value="Crear Usuario">

</form>
<br><br>


@if($errors->any())
    @foreach($errors->all() as $message)
        <div style="color: red;">{{$message}}</div><br>
    @endforeach
@endif

@if(session('success'))
<div style="color: red;">{{session('success')}}</div><br>
@endif

    
    <br>
<a href={{route('home')}}>Volver</a>
    
</body>
</html>
