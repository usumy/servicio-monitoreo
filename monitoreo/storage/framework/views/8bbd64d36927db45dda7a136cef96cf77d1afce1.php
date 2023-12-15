
<?php $__env->startSection('title', 'Registro de departamentos'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Tabla De Registro de departamentos</h1>
	</div>
	<a  class="btn btn-primary"
			href="<?php echo e(route('Depto.create')); ?>">
			Crear Departamento</a>
	<form method="POST" action="/Depto/search">
	<?php echo csrf_field(); ?>
	<?php if($Depto instanceof LengthAwarePaginator): ?>
	<?php echo e($Depto->links()); ?>

	
	<?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
               
            </tr>
        </thead>
		
		<?php $__empty_1 = true; $__currentLoopData = $Depto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Depto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		
        <tbody>
			<tr>
				
				<th scope='row'><?php echo e($Depto->id); ?></th>
				<td >
					<a
					href="<?php echo e(route('Depto.show', $Depto)); ?>">
						<span><?php echo e($Depto['descripcion']); ?></span>
					</a></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<td>no hay departamentos para mostrar </td>
				
		</tbody>
		<?php endif; ?>
	</table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monitoreo\resources\views/Depto/index.blade.php ENDPATH**/ ?>