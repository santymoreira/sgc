@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
@stop
@section('not_general_styles')
{{ HTML::script('js/framebox_reporte.js'); }}
@stop
@section('options')
   	
   			 <div id="menu">
						<ul>
				               <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
							  <li class="nivel1"><a class="nivel1" {{ HTML::link('C_exterior/macroprocesos', 'Macroprocesos');}}
							  <li class="nivel1"><a onclick="Alert()" class="nivel1" {{ HTML::link('users/empleados/3', 'Administración');}} 
							  <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a>
							  	<ul class="cuatro">
            						<li><a {{ HTML::link('reportes/individual/3/1', 'Individual');}} </a></li>
									<li><a {{ HTML::link('reportes/individual/3/2', 'Mensual');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensualE/3/3', 'Mensual Empleados');}} </a></li>
                					<li><a {{ HTML::link('reportes/mensualE/3/4', 'Individual Empleados');}} </a></li>
                 					<li><a {{ HTML::link('descargas', 'Descargas');}} </a></li>
        						</ul>
							  </li>
						</ul>
				  </div> 
@stop

@section('login')
 @parent
   
@stop


@section('content')
@stop

@section('body')
		{{Session::put('escuela','3')}}
        <div id="position1" class="layout-cell content">    
          
             <center> <label>Avance SGC</label>
                    <a rel="floatbox" class="fbPopup" title="Avance SGC Comercio Exterior" rev="width:608 height:217 scrolling:no" href="../consolidadoEscuela/{{Session::get('escuela')}}">
                      <input type="image" src="{{asset('images/Utilitarios/chart_bar.png'); }}"/>
                    </a>
                    <br/>
                <!-- Logo SGC escuela -->    
                  <img src="{{ asset('images/Exterior/exterior.png') }}" width="850" height="295">
            </center>     


              <!-- Mensajes -->
            @if(Session::get('logout'))
                 <script type="text/javascript">
                    smoke.alert('Ud no tiene acceso, Inicie Sesión')
                 </script>
              @endif
           @if(Session::get('denied'))
                 <script type="text/javascript">
                 smoke.alert('Ud no tiene acceso, Tiene que ser administrador del sistema en esta Escuela');
                 </script>
              @endif
  
          <!-- Footer -->    

           <div class="cleared"> 
              <center> <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
                <p style="font-size:10px;color:#03F">&nbsp;</p>
               <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                          <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
                       </p>
              </center>
          </div>    
		</div>		
@stop