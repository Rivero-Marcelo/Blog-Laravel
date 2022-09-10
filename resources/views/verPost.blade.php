<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Publicacion</title>
</head>
<body>
    
<h3><b> AUTOR:</b> {{$post->user->name}} {{$post->user->apellido}}</h3>
<h3><b> Fecha de Publicación: </b> {{ $post->created_at}}</h3>
<b>--------------------------------------------------------------------------------</b><br><br>

<b>id Publicacion: {{$post->id}} </b><b><h3><p>Titulo: {{$post->titulo}} </b></p></h3><p> {{$post->cuerpo}}</p>
<br><br><br><br>
<a href={{route('home')}}>Volver</a>

</body>
</html>
