<nav class="navbar navbar-light navbar-expand-lg  bg-white shadow-sm">
	<div class="container">
		

		<a class="navbar-brand" href="<?php echo e(route('home')); ?>}">
			<?php echo e(config('app.name')); ?>

		</a>
		
		<div>
		 	
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link"
				href="<?php echo e(route('home')); ?>">
					Inicio  <br> 
				</a>

			</li>
			<br>
			<?php if(auth()->guard()->guest()): ?>
					<li class="nav-item">
						<a  class="nav-link"
						href="<?php echo e(route('login')); ?>">
							Iniciar sesión     <br>
						</a>
					
					<?php else: ?>
						<li class="nav-item">
							<a class="nav-link"
							href="<?php echo e(route('register')); ?>">
								Registrar Usuario  
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
							href="<?php echo e(route('falla.index')); ?>">
								Registro de fallas    
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link"
							href="<?php echo e(route('Depto.index')); ?>">
							Registro de Departamentos
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link"
							href="<?php echo e(route('Prioridad.index')); ?>">
							Registro de grados de prioridad
							</a>
						</li>

						<li class="nav-item" >
							<a class="nav-link"
							href="#" 
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Cerrar sesión 
							</a>
						</li>
				<?php endif; ?>


		</ul>
			

		</div>
	</div>
	</nav>
	 <form id="logout-form"
	  action="<?php echo e(route('logout')); ?>" 
	  method="POST" 
	  style="display: none;">
           <?php echo csrf_field(); ?>
     </form><?php /**PATH C:\laragon\www\monitoreo\resources\views/partials/nav.blade.php ENDPATH**/ ?>