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
        @section('logued')
         <p>  BIENVENIDO: <b>{{auth()->user()->name}} {{auth()->user()->apellido}}</b></p>
        <div><a href={{route('logout')}}>Cerrar Sesión</a></div><br>
        
        @endsection

        @section('menu')
            <div><a href={{route('posts.create')}}>Nuevo Post</a></div><br>
        @endsection

    @endauth


    
        @section('posts')

        <h2>PUBLICACIONES</h2>
        <b>_______________________________________________</b>

            @foreach ($posts as $post)
            <p><b>Titulo:</b> {{$post->titulo}}  
             <b>Autor:</b> {{$post->user->name}} {{$post->user->apellido}} @auth
              <a href={{route('posts.show', ['id' => $post->id])}}>Ver Post</a> @endauth </p>
             ____________________________________________________________
            @endforeach
        @endsection
