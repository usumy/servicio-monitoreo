<?php echo csrf_field(); ?>
<div class="container mt-5">
    
    <form id="fallaForm" method="POST" action="procesar_formulario.php">
        <div class="mb-3">
            <label for="descripcion" class="form-label">Nombre del departamento</label>
            <textarea
             class="form-control" 
             id="descripcion"
             name="descripcion"
             rows="1" required>
            </textarea>
        </div>

        <button class="btn btn-primary btn-block"> <?php echo e($btnText); ?> </button>
        <a class="btn btn-link btn-block " 
        href="<?php echo e(route('Depto.index')); ?>">
        Cancelar </a>
        
    </form>
</div>
<?php /**PATH C:\laragon\www\monitoreo\resources\views/Depto/_form.blade.php ENDPATH**/ ?>