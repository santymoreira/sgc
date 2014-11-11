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
   	
   			 <div id="menu">
						<ul>
                       <li class="nivel1"><a class="nivel1" href="welcome">Inicio </a></li>
                     	    <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Volver</a>
                       	</ul>			
          </div> 

@stop

@section('login')
 @parent
@stop

@section('content')
@stop



@section('body')

        <div id="central-content" height="50px" >
                              <div class="page-header" >
                              <h1><center>Descargas</center></h1>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="list-group">
                                  <a class="list-group-item active" >
                                    Documentos Descargables
                                  </a>
                                     @foreach ($files as $file)
                                       <a 
                                  href="{{$file->DIRECCION}}" target="_blank" class="list-group-item">
                                  <p class="glyphicon glyphicon-save"> {{$file->NOMBRE}}</p>
                                  <h5>{{$file->DESCRIPCION}}</h5>   
                                  <h5>{{$file->FECHA}}</h5>  
                                  
                                  </a>
        
                                   @endforeach

                                </div>
                              </div><!-- /.col-sm-4 -->
                              </div><!-- /.col-sm-4 -->
                            </div>
                          </div>


@stop
