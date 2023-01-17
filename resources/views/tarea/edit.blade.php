@extends('tema.app')

@section('title', "Editar Tarea")

@section('contenido')
    <h3 class="text-center">
        Editar Tarea <i>{{ $tarea->nombre }}</i>
    </h3>
    <br>
    <form action="{{ route('tarea.update', $tarea) }}" method="POST" enctype='multipart/form-data'>
        @method('put')
        <x-tarea-form-body :tarea="$tarea"/>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection