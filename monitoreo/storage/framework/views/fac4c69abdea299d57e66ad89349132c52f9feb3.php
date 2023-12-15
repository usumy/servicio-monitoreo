

<?php $__env->startSection('title', 'Fallas registradas'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="d-flex justify-content-between aligm-items-center mb-3">
		<h1 class="display-4 mb-0">Tabla De Fallas Registradas</h1>
	</div>
	
	<?php echo csrf_field(); ?>
	<?php if($falla instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
	<?php echo e($falla->links()); ?>

	
	
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Prioridad</th>
				<th scope="col">ID y Nombre del Empleado</th>
                <th scope="col">Departamento</th>
                <th scope="col">Resuelto</th>
            </tr>
        </thead>
		
		<?php $__empty_1 = true; $__currentLoopData = $falla; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $falla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		
        <tbody>
			<tr>
				
				<th scope='row'><?php echo e($falla->id); ?></th>
				<td>
					<a
					href="<?php echo e(route('falla.show',$falla)); ?>">
						<span><?php echo e($falla->descripcion); ?></span>
					</a>
				</td>
				<td>
					
					<?php echo e($falla->prioridad_id); ?>

					<?php if($falla->prioridad): ?>
						<?php echo e($falla->prioridad->descripcion); ?>

					<?php else: ?>
						<!-- Manejo cuando la relación prioridad no está definida -->
						Prioridad sin registrar
					<?php endif; ?>
				</td>
				<td>
					<?php echo e($falla->user_id); ?> <!-- Muestra el ID del usuario asociado a la falla -->  
					<?php echo e($falla->user->name); ?>

				</td>
				<td>
					<?php echo e($falla->user->departamento_id); ?>

					<?php if($falla->Depto): ?>
					<?php echo e($falla->Depto->descripcion); ?>

					<?php else: ?> 
						Sin descripción disponible
					<?php endif; ?>
				</td>
				
				

				<td><input type='checkbox' class='check-box'></td>
				
			</tr>
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<td>no hay fallas para mostrar </td>
				
		</tbody>
		<?php endif; ?>
	</table>
	<?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monitoreo\resources\views/falla/index.blade.php ENDPATH**/ ?>