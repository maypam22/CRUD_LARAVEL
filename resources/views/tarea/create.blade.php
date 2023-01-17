@extends('tema.app')

@section('title', "Nueva Tarea")

@section('contenido')
    <h3 class="text-center">
        Registrar Tarea
    </h3>
    <br>
    <form action="{{ route('tarea.store') }}" method="POST" enctype='multipart/form-data'>
        <x-tarea-form-body/>
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