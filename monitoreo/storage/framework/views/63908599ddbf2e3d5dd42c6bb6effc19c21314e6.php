
<?php $__env->startSection('title', 'registro de prioridades'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			<?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<form  class="bg-while py-3 px-4 shadow rounded"
			method="POST"
			action="<?php echo e(route('Prioridad.store')); ?>">
			<h1 class="display-4">Registro de prioridades</h1>
			<hr>
			<?php echo $__env->make('Prioridad._form', ['btnText'=>'Guardar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monitoreo\resources\views/Prioridad/create.blade.php ENDPATH**/ ?>