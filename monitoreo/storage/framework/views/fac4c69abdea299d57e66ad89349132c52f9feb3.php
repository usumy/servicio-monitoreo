

<?php $__env->startSection('title', 'Fallas registradas'); ?>
<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Tabla De Fallas Registradas</h1>
	</div>
	<form method="POST" action="/falla/search">
	<?php echo csrf_field(); ?>
	<?php if($falla instanceof LengthAwarePaginator): ?>
	<?php echo e($falla->links()); ?>

	
	<?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Departamento</th>
                <th scope="col">Nombre del Empleado</th>
                <th scope="col">Resuelto</th>
            </tr>
        </thead>
		
		<?php $__empty_1 = true; $__currentLoopData = $falla; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $falla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		
        <tbody>
			<tr>
				
				<th scope='row'><?php echo e($falla->id); ?></th>
				<td ><?php echo e($falla->description); ?></td>
				<td><?php echo e($falla->prioridad); ?></td>
				<td><?php echo e($falla->departamento); ?></td>
				<td><?php echo e($falla->nombreemple); ?></td>
				<td><input type='checkbox' class='check-box'></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<td>no hay fallas para mostrar </td>
				
		</tbody>
		<?php endif; ?>
	</table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monitoreo\resources\views/falla/index.blade.php ENDPATH**/ ?>