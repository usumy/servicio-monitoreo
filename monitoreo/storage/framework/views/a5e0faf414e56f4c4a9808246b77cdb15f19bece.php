
<?php $__env->startSection('title', 'Visualización de la falla/'.$falla->id); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
<form>	
	<div class="bg-white p-5 shadow rounded">
		<h1><?php echo e($falla->id); ?></h1>		
		<p class="text-primary  size=7"> descripción de la falla: 
			<?php echo e($falla->description); ?></p>
        <p class="text-primary  size=7"> Prioridad de la Falla: 
            <?php echo e($falla->prioridad_id); ?> 
			<?php if($falla->prioridad): ?>
				<?php echo e($falla->prioridadc); ?>

			<?php else: ?>
				<!-- Manejo cuando la relación prioridad no está definida -->
				No hay prioridad disponible
			<?php endif; ?>
		</p>
		<p class="text-primary  size=7"> departamento del que proviene: 
			<?php echo e($falla->user->departamento_id); ?>

				<?php if($falla->user && $falla->user->departamento): ?>
					<?php echo e($descripcion = $falla->user->departamento->description); ?>

				<?php else: ?> 
					<?php echo e($descripcion = "Sin descripción disponible"); ?>

				<?php endif; ?>
		</p>
		<p class="text-primary size=7">
			Numero y nombre del usuario:
			<?php echo e($falla->user_id); ?> 
			<?php echo e($falla->user->name); ?>

		</p>
		<?php echo csrf_field(); ?>	
		<p class="text-black-50">
			<?php echo e($falla->created_at->diffForHumans()); ?></p>
		<div class="d-flex justify-content-between
		alinf-items-center">
			<a href="<?php echo e(route('falla.index')); ?>">Regresar</a>
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