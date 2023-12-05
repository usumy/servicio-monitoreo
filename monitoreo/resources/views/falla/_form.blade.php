@csrf
<div class="container mt-5">
    @csrf 
    <form id="fallaForm" method="POST" action="procesar_formulario.php">
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción de la Falla</label>
            <textarea
             class="form-control bg-light shadow-sm" 
             name="descripcion"
             rows="3" required>
             {{old('description', $falla->description)}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="prioridad_id" class="form-label">¿Cual es el grado de prioridad?</label>
            <select
             class="form-select"
             id="prioridad_id"
             name="prioridad_id" required>
                <option value="1">Alta</option>
                <option value="2">Media</option>
                <option value="3">Baja</option>
            </select>
        </div>

        <button class="btn btn-primary btn-block"> {{$btnText}} </button>
        <a class="btn btn-link btn-block " 
        href="{{route('falla.index')}}">
        Cancelar </a>
        
    </form>
</div>
