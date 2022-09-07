@extends('layouts.default')


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
    
</div>
@endsection


    @auth
        @section('logout')
        Bienvenido: {{auth()->user()->name}}
        <br>
        <a href="logout">Cerrar Sesión</a>
        @endsection
    @endauth

    @section('posts')
        @foreach ($posts as $post)
            <p>Titulo: {{$post->titulo}}</p>
        @endforeach
    @endsection


