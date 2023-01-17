@extends('tema.app')

@section('title', " Contacto")

@section('contenido')

<style>
    .container {
        background-color: lightcyan;
    }

    h1 {
        color: blue;
        text-align: center;
    }

    h2 {
        color: blueviolet;
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <header>
                <h2>FORMULARIO</h2>
            </header>
        </div>

        <form action="{{route('contacto.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo: </label>
                <input type="text" class="form-control" name="nombre" aria-describedby="nameHelp">
                @error('nombre')
                <p><strong>{{$message}}</strong></p>
                @enderror
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo: </label>
                    <input type="email" class="form-control" name="correo">
                </div>
                <br>
                @error('correo')
                <p><strong>{{$message}}</strong></p>
                @enderror

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Deja tu comentario</label>
                    <textarea class="form-control" name="mensaje" rows="3"></textarea>
                    @error('mensaje')
                    <p><strong>{{$message}}</strong></p>
                    @enderror
                </div>
                <button class="btn btn-primary mb-3" type="submit">Enviar</button>
                <br>
            </div>
            @if(session('info'))
                <script>
                    alert("{{session('info')}}");
                </script>
            @endif
            @endsection