
    <?php echo csrf_field(); ?> 
    
        <div class="form-group">
            <label for="descripcion" class="form-label">Descripción de la Falla</label>
            <textarea
            class="form-control border-0 bg-light shadow-sm" 
             name="descripcion"
             >
             <?php echo e(old('description', $falla->description)); ?>

            </textarea>
        </div>
        <div class="form-group">
            <label for="prioridad_id" class="form-label">¿Cual es el grado de prioridad?</label>
            <select
             class="form-select"
             id="prioridad_id"
             name="prioridad_id" >
                <option value="1">Alta</option>
                <option value="2">Media</option>
                <option value="3">Baja</option>
            </select>
        </div>

        <button class="btn btn-primary btn-block"> <?php echo e($btnText); ?> </button>
        <a class="btn btn-link btn-block " 
        href="<?php echo e(route('falla.index')); ?>">
        Cancelar </a>
        
    <?php /**PATH C:\laragon\www\monitoreo\resources\views/falla/_form.blade.php ENDPATH**/ ?>