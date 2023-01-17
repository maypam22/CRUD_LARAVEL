@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">Nombre de la Tarea</label>
        <input type="text" name="nombre" id="InputNombre" class="from-control" placeholder="Ingrese la tarea" value="{{ old('nombre', $tarea->nombre) }}">

    </div>
    <div class="col-sm-4">
        <div class="form-chech">
            <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" value="1" @checked(old('finalizada', $tarea->finalizada))>
            <label for="InputFinalizada" class="form-check-label">Finalizada</label>
        </div>
    </div>
    <div class="col-sm-4">
        <label for="SelecUrgencia" class="form-label">Urgencia</label>
        <select name="urgencia" id="SelecUrgencia" class="form-select">
            @for($x = 0; $x < count($urgencias); $x++) <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia) )>{{ $urgencias[$x] }}</option>
                @endfor
        </select>
    </div>
    <div class="col-sm-4">
        <label for="InputFechaLimite" class="form-label">Fecha Limite</label>
        <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite', $tarea->fecha_limite->format('d-m-Y\TH:i')) }}">
    </div>
    <div class="col-sm-12">
        <label for="TextAreaDescripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
    </div>

    <div class="col-sm-12">
        <label for="image" class="form-label">Seleccione Imagen</label>
        <input type="file" name="image" cols="30" rows="10" class="form-control" value="{{ old('image', $tarea->image) }}"></input>
    </div>
    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-success">
            Guardar
        </button>
    </div>
</div>