@extends('home.layout')

@section('Different_Styles')
	@parent
	
	    {{ HTML::style('css/new.css'); }} 
		{{ HTML::style('css/new1.css'); }} 
		{{ HTML::style('css/Table.css');  $var=Session::get('escuela'); }} 
		{{ HTML::style('css/bootstrap.min.css'); }}
		    <script src="js/upfile.js"></script>
		     <script src="js/bootstrap.js"></script>
		     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	
@stop

@section('options')
   	
   			

@stop

@section('login')
 @parent
@stop

@section('content')
@stop



@section('body')

<center><h3>Administración de archivos</h3></center>
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
              <li>
              {{ HTML::link( 'users/empleados/'.$var , 'Volver'.' ') }}
             </li>
           </ul>
        </div>

        </div>
    </nav>

            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                            {{ Form::open(array('url'=>'uploadfile/', 'method' => 'post','enctype'=>'multipart/form-data') )}}
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre del Archivo" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Descripción" id="desc" name="desc" required>
                                </div>
    
                   				<input type="file" id="file1" name="file1" accept=".pdf" class="form-control" required> 
                          <br/>
                   			 <center><input type="submit" value="Guardar" class="btn btn-success"></center>
                              @if(Session::has('message'))
                            <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
                          @endif
                                <div id="success"></div>
                                	{{ Form::close()}}
                            </div>
                        </div>
                        

                
                </div>
            </div>


@stop
