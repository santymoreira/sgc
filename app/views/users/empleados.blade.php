@extends('home.layout')

@section('Different_Styles')
	@parent
		{{ HTML::style('css/new.css'); }} 
		{{ HTML::style('css/new1.css'); }} 
	    {{ HTML::style('css/Table.css');  $var=Session::get('escuela'); }} 
	
@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
                       <li class="nivel1"><a class="nivel1" href="../../welcome">Inicio </a></li>
                     	    <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>
                       	</ul>			
          </div> 
@stop
@section('modificar')
    @if (Auth::user())
    <!-- foto del usuario logueado -->
    @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
          <div id="fotoperfil"><a href="../../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
              <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a>
          </div>
       @else  <!-- Foto por defencto del usuario logueado -->
            <div id="fotoperfil"><a href="../../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
              <img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92">
            </a></div>
     @endif
     <!-- Carga nombres del usuario logueado -->
      <div id="nombres" width="20" height="300">
         <p><b>{{ Auth::user()->NOMBRES }}</b></p> 
       </div> 
       </a>
    @else <!-- foto por defecto usuario no logueado -->
       <div id="fotoperfil"><img src="{{ asset('images/Login/fotoreal.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></div>
    @endif
  @stop
@section('login')
 @parent
   
@stop


@section('content')
@stop

@section('body')
	<h3>Administración de empleados</h3>
		<nav class="navbar navbar-default" role="navigation">
	  		<div class="container-fluid">
	  			<div class="navbar-header">
	  			@if($var == 1)
					<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Empresas</a>
				@elseif($var == 2)
					<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Contabilidad y Auditoría</a>
				@elseif($var == 3)
					<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Comercio Exterior</a>
				@elseif($var == 4)
					<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería Financiera</a>
				@elseif($var == 5)
					<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Marketing</a>
				@elseif($var == 6)
					<a class="navbar-brand" style="cursor:default;" href="#">Escuela de Ingeniería en Gestión de Transporte</a>
				@elseif($var == 8)
					<a class="navbar-brand" style="cursor:default;" href="#">Facultad de Empresas</a>
				@endif
	  			</div>
	    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      			<ul class="nav navbar-nav">
	        			<li class="active"><a style="cursor:pointer;" onclick="window.location.reload()">Todos</a></li>
	        		@if($var==8)
		        		<li>
	    					{{ HTML::link( 'users/createfade', 'Nuevo'.' ') }}
						</li>
					@endif
					<li> {{ HTML::link('subirArchivo','Subir Archivos'); }} 
	        		</ul>
	        	</div>
	        </div>
	    </nav>

		<div class="panel panel-success">
	  		<div class="panel-heading">
	  			<h4>Lista de usuarios</h4>
	  		</div>
  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr >
						<th  class="fuentes">Código</th>
						<th  class="fuentes">Cédula</th>
						<th  class="fuentes">Nombres completos</th>
						<th  class="fuentes">Correo Electrónico</th>
						<th  class="fuentes">Celular</th>
						<th  class="fuentes">Convencional</th>
						<th  class="fuentes">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr >
							<td class="fuentes">{{ $user->COD_EMPLEADO }}</td>
							<td class="fuentes">{{ $user->CI }}</td>
							<td class="fuentes">{{ $user->NOMBRES }}</td>
							<td class="fuentes">{{ $user->EMAIL }}</td>
							<td class="fuentes">{{ $user->CELULAR }}</td>
							<td class="fuentes">{{ $user->CONVENCIONAL }}</td>
							@if($var ==8)
								<td class="fuentes">
									<a href="../show/{{ $user->COD_EMPLEADO }},{{$var}}"><span class="label label-info">Ver</span></a>
									<a href="../editfade/{{ $user->COD_EMPLEADO }},{{$var}}"><span class="label label-success">Editar</span></a>
									<a href="{{ url('users/destroy',$user->COD_EMPLEADO) }},{{$var}}"><span class="label label-danger">Eliminar</span></a>
								</td>
							@endif
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>

  	@if(Session::has('message'))
	    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif

@stop