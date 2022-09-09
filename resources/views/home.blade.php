@extends('layouts.default')

@guest
    @section('formulario')
        <div><form  action= {{ route('home') }}    method="post">
        @csrf
        Usuario  <input type="text" name="email"> Contraseña 
        <input type="password" name="password">  
        <input type="submit" value="Iniciar Sesión"></form><br>

        @if(session()->has('error_login'))
        <div style="color: red;">{{session()->get('error_login')}}</div>
        @endif

        @if ($errors->any())
        @foreach($errors->all() as $error)
        <div style="color: red;">{{$error }}</div>
        @endforeach
        @endif

        <br>

        <div><a href={{route('usuarios.create')}}> Registrarse</a></div>    
        </div>
    @endsection
@endguest

    @auth
        @section('logout')
        <div>BIENVENIDO: {{auth()->user()->name}}</div> 
        <br><br>
        <div><a href={{route('logout')}}>Cerrar Sesión</a></div><br>
        <div><a href={{route('posts.create')}}>Nuevo Post</a></div>
        @endsection
    @endauth

    @section('posts')
        @foreach ($posts as $post)
            <p>Titulo: {{$post->titulo}}</p>
        @endforeach
    @endsection


