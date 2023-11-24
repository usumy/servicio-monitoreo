
<?php $__env->startSection('title', 'Tabla de fallas'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">

	<div class="bg-white p-5 shadow rounded">
		<h1><?php echo e($falla->id); ?></h1>		
		<p class="text-secondary">
			<?php echo e($falla->description); ?></p>
        <p class="text-secondary">
            <?php echo e($falla->prioridad); ?></p>
		<p class="text-black-50">
			<?php echo e($falla->created_at->diffForHumans()); ?></p>
		<div class="d-flex justify-content-between
		alinf-items-center">
			<a href="<?php echo e(route('fallas.index')); ?>">Regresar</a>
			
<?php echo csrf_field(); ?>
</form>

			
				
	
			<div class="btn-group btn-group-sm">
				<a class="btn btn-primary"
				href="<?php echo e(route('falla.edit',$falla)); ?>">
				Editar</a>
				
				
				
			</div>
			<form  
				method="POST" 
				action="<?php echo e(route('falla.destroy', $falla)); ?>">
				<?php echo csrf_field(); ?>  <?php echo method_field('DELETE'); ?>
				<button>Eliminar</button>
			</form>
			
		</div>

	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monitoreo\resources\views/falla/show.blade.php ENDPATH**/ ?>