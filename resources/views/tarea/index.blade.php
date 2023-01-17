@extends('tema.app')

@section('title', "Listado de tareas")

@section('contenido')
<h3 class="text-center">
    <strong>Listado de tareas</strong>
</h3>
<br>
<form class="form-inline my-2 my-lg-0 float-righ">
    <input name="buscarpor" class="" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
<br>
<div>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Finalizada
                </th>
                <th>
                    Fecha limite
                </th>
                <th>
                    Urgencia
                </th>
                <th>
                    Descripcion
                </th>
                <th>
                    Imagen
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
            <tr>
                <td>
                    {{ $tarea->nombre }}
                </td>
                <td>
                    {{ $tarea->estaFinalizada() }}
                </td>
                <td>
                    {{ $tarea->fecha_limite->format('TH:i d / m / y')}}
                </td>
                <td>
                    {{ $tarea->urgencia() }}
                </td>
                <td>
                    {{ $tarea->descripcion }}
                </td>
                <td>
                <img src="{{ $tarea->image }}" class="card-img-top" alt="..." width="180" height="180">
                </td>
                <td>
                    <a href="{{ route('tarea.edit', $tarea) }}" class="btn btn-outline-warning">Editar</a>
                    <a href="{{ route('tarea.show', $tarea) }}" class="btn btn-outline-success">Ver</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection