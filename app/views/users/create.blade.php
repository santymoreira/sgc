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
				       		<li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio'); }} 
                       		 @if($var == 2)  
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('contabilidad/cont_audi_sgc','SGC'); }}  
                        @elseif($var ==7)
                          <li class="nivel1"><a class="nivel1" {{ HTML::link('E_distancia/distancia_sgc','SGC'); }}  
                        @elseif($var ==1)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('empresas/empresas_sgc','SGC'); }}  
                        @elseif($var ==3)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('C_exterior/exterior_sgc','SGC'); }}  
                        @elseif($var ==4)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('finanzas/finanzas_sgc','SGC'); }}  
                        @elseif($var ==5)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('marketing/marketing_sgc','SGC'); }}  
                        @elseif($var ==6)
                           <li class="nivel1"><a class="nivel1" {{ HTML::link('transporte/transporte_sgc','SGC'); }}  
                      @endif
                       	</ul>			
          </div> 

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
  			<form method="post" action="store/{{$var}}">
			
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
				   					<input type="checkbox" id="dire" name="director" value="1"> 
				   				</td>
				   				<td style='width: 50%' align="center">
				   					<b>Director de Escuela</b>
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
						  			<input type="checkbox" id="doc" name="docente" value="4"> 
						  		</td>
						  		<td style='width: 50%' align="center">
				   					<b>Docente</b>
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