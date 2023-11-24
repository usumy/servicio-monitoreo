@csrf
<div class="container mt-5">
    
    <form id="fallaForm" method="POST" action="procesar_formulario.php">
         <div class="mb-3">
            <label for="nomb_trabajador" 
            class="form-label">nombre de quien realizo el servicio</label>
            <textarea
             class="form-control" 
             id="nomb_trabajador"
              name="nomb_trabajador" 
              rows="1" required>
            </textarea>
        </div>
        <div class="mb-3">
            <label for="departamento" class="form-label"> ¿De que departamento es?</label>
            <select
             class="form-select"
              id="departamento"
               name="departamento" required>
                <option value="departamento-sistemas">Departamento de sistemas</option>
                <option value="departamento-programación">Departamento de programación</option>
                <option value="departamento-mantenimiento">Departamento de mantenimiento</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="id_servicio" class="form-label">numero del servicio</label>
            <textarea 
            class="form-control" 
            id="id_servicio" 
            name="id_servicio" 
            rows="1" required></textarea>
        </div>
        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción de lo que se realizo </label>
            <textarea
             class="form-control" 
             id="Descripcion"
              name="Descripcion" 
              rows="3" required></textarea>
        </div>
        <button class="btn btn-primary btn-block"> {{$btnText}} </button>
        <a class="btn btn-link btn-block " 
        href="{{route('falla.index')}}">
        Cancelar </a>
        
    </form>
</div>
