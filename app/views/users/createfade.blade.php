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
				       		<li class="nivel1"><a class="nivel1" href="../welcome">Inicio </a></li>
                     	    <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>
                       	</ul>			
          </div> 

@stop
@section('modificar')
     @if (Auth::user())
    <!-- foto del usuario logueado -->
    @if(file_exists('images/Login/'.Auth::user()->CI.'.png'))
          <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no" >
              <img src="{{ asset('images/Login/'.Auth::user()->CI.'.png'); }}" style="border: solid 5px #00003d; cursor: pointer;"  width="92" height="92"></a>
          </div>
       @else  <!-- Foto por defencto del usuario logueado -->
            <div id="fotoperfil"><a href="../users/editp/{{Auth::user()->COD_EMPLEADO}}" class="fbPopup1" rel="floatbox" title="Cambiar Informacion Personal" rev="width:450 height:570 scrolling:no">
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

<center><h3>Administración de empleados</h3></center>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				@if($var == 8)
					<a class="navbar-brand" style="cursor:default;" href="#">Facultad de Empresas</a>
				@endif
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        		
        			<li>
    					{{ HTML::link( 'users/empleados/'.$var , 'Todos'.' ') }}
					</li>
					<li class="active"><a {{ HTML::link('users/create','Nuevo'); }} 
					
				</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success" align="center">
  		<div class="panel-heading"> 
  			<h4>Registro de Empleados</h4>
  		</div> 
  		<div class="panel-body" >
  			<form method="post" action="storefade/{{$var}}">
			
				<p>
					<input type="text" id="ciComp" name="ci" placeholder="Cédula de Identidad" class="form-control" >
				</p>
				{{$errors->first('ci')}}
				<p>
					<input type="text" name="nombres" placeholder="Nombres completos" class="form-control" >
				</p>
					{{$errors->first('nombres')}}
				<p>
					<select  class="form-control" name="sexo">
						<option selected value="H">Hombre</option>
						<option value="M">Mujer</option>
					</select>
				</p>
				<p>
					<input type="text" name="email" placeholder="Correo Electrónico" class="form-control" >
				</p>
					{{$errors->first('email')}}
				<p>
					<input type="text" name="celular" placeholder="Teléfono Móvil" class="form-control" >
				</p>
				{{$errors->first('celular')}}
				<p>
					<input type="text" name="convencional" placeholder="Teléfono convencional" class="form-control" >
				</p>
				{{$errors->first('convencional')}}

				<fieldset>
					  <legend>Función: </legend>
					 <p>
					 <table style='width: 20%' border="4">
			   				<tr>
				   				<td style='width: 10%' align="center">
				   					<input type="checkbox" id="dec" name="decano" value="5"> 
				   				</td>
				   				<td style='width: 50%' align="center">
				   					<b>Decano</b>
				   				</td>
				   			</tr>
				   			<tr>
						  		<td style='width: 10%' align="center">
						  			<input type="checkbox" id="vice" name="vicedec" value="6"> 
						  		</td>
						  		<td style='width: 50%' align="center">
				   					<b>Vicedecano</b>
				   				</td>
						  	</tr>
				   		  	<tr>
						  		<td style='width: 10%' align="center">
						  			<input type="checkbox" id="trab" name="trabajador" value="3">
						  		</td>
						  		<td style='width: 50%' align="center">
				   					<b>Trabajador</b>
				   				</td>
						  	</tr>
						  	<tr>		
						  		<td style='width: 10%' align="center">	
						  			<input type="checkbox" id="admini" name="admin" value="2">
						  		</td>
						  		<td style='width: 50%' align="center">
				   					<b>Administrativo</b>
				   				</td>
						  	</tr>
						</table>
					</p>
				</fieldset>
				 @if(Session::get('exist'))
			        <p>{{ Session::get('exist') }}</p>
			    @endif
				 @if(Session::get('msg'))
			        <p>{{ Session::get('msg') }}</p>
			    @endif
			     @if(Session::get('mismaEsc'))
			        <p>{{ Session::get('mismaEsc') }}</p>
			    @endif
			    
				<p>
					<input type="submit" value="Guardar" class="btn btn-success">
				</p>
				@if(Session::has('message'))
					<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
				@endif	
			</form>
		</div>
	</div>	
@stop