<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Publicacion</title>
</head>
<body>

<h1>NUEVA PUBLICACION</h1>
<br>

<form action={{route('posts.store')}} method="post">
    @csrf
<b>Creado por: {{auth()->user()->name }} {{auth()->user()->apellido}} </b> <br>
<b>E-mail:</b> {{auth()->user()->email}} <br>
<b> Fecha:</b> {{date('d-m-Y')}} 
<br><br>

<b>Titulo:</b> <br><input type="text" name="titulo" size="49"><br><br>

<textarea name="cuerpo" rows="15" cols="50"></textarea><br><br>


<input type="submit" value="Publicar">

</form>

<br><br>
<?php if(isset($parametros['error']) && $parametros['error'] === false ) :?>
        <div style="color: red;">Publicación exitosa.</div>
    <?php endif;?><br>
    
<a href={{route('home')}}>Volver</a>
    
</body>
</html>