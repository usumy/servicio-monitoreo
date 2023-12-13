<nav class="navbar navbar-light navbar-expand-lg  bg-white shadow-sm">
	<div class="container">
		

		<a class="navbar-brand" href="{{ route('home')}}}">
			{{config('app.name')}}
		</a>
		
		<div>
		 	
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link"
				href="{{route('home')}}">
					Inicio  <br> 
				</a>

			</li>
			<br>
			@guest
					<li class="nav-item">
						<a  class="nav-link"
						href="{{ route('login')}}">
							Iniciar sesión     <br>
						</a>
					
					@else
						<li class="nav-item">
							<a class="nav-link"
							href="{{ route('register')}}">
								Registrar Usuario  
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
							href="{{ route('falla.index')}}">
								Registro de fallas    
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link"
							href="{{ route('Depto.index')}}">
							Registro de Departamentos
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link"
							href="{{ route('Prioridad.index')}}">
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
				@endguest


		</ul>
			

		</div>
	</div>
	</nav>
	 <form id="logout-form"
	  action="{{ route('logout') }}" 
	  method="POST" 
	  style="display: none;">
           @csrf
     </form>