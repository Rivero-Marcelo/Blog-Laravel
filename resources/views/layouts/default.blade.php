<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>


    @yield('formulario')    

    @yield('logout')


    
<h1 align="center"> ----- BLOG HOME PAGE ----- </h1>
<br><br><br><br>
<h2>PUBLICACIONES</h2>
<br><br>

@auth
@yield('posts')
@endauth



</body>
</html>