
<?php $__env->startSection('title', 'Registro del catalogo de prioridad'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Tabla De Registro del catalogo de prioridad</h1>
	</div>
	<a  class="btn btn-primary"
			href="<?php echo e(route('Prioridad.create')); ?>">
			crear grado de prioridad</a>
	<form method="POST" action="/Prioridad/search">
	<?php echo csrf_field(); ?>
	<?php if($Prioridad instanceof LengthAwarePaginator): ?>
	<?php echo e($Prioridad->links()); ?>

	
	<?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
               
            </tr>
        </thead>
		
		<?php $__empty_1 = true; $__currentLoopData = $Prioridad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Prioridad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		
        <tbody>
			<tr>
				
				<th scope='row'><?php echo e($Prioridad->id); ?></th>
				<td >
					<a
					href="<?php echo e(route('Prioridad.show', $Prioridad)); ?>">
						<span><?php echo e($Prioridad['descripcion']); ?></span>
					</a></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<td>no hay departamentos para mostrar </td>
				
		</tbody>
		<?php endif; ?>
	</table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monitoreo\resources\views/Prioridad/index.blade.php ENDPATH**/ ?>