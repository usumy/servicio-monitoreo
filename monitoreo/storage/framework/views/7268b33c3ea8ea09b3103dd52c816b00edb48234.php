<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<ul class="m-0">
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?><?php /**PATH C:\laragon\www\monitoreo\resources\views/partials/validation-errors.blade.php ENDPATH**/ ?>