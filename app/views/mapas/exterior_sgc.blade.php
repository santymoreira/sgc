@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
@stop
@section('options')
   	
   			 <div id="menu">
						<ul>
				              <li class="nivel1"><a class="nivel1" {{ HTML::link('home/welcome', 'Inicio');}}
							  <li class="nivel1"><a class="nivel1" {{ HTML::link('C_exterior/macroprocesos', 'Macroprocesos');}}
							  <li class="nivel1"><a onclick="Alert()" class="nivel1">Administración</a></li>
							  <li class="nivel1"><a onclick="Alert()" class="nivel1">Reportes</a></li>
						</ul>
				  </div> 
@stop

@section('login')
 @parent
   
@stop


@section('content')
@stop

@section('body')
        <div class="layout-cell content">    
            <div id="central"> 
               <div id="central-content"> </br></br>
                   <center><img src="{{ asset('images/Exterior/C_exterior.png') }}" width="850" height="295"></center>    
               </div>
            </div>
             
      		 <div class="cleared"> 
				<center> <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">&nbsp;</p>
				  <p style="font-size:10px;color:#03F">Copyright © 2014. All Rights Reserved.</p>
				</center>
			</div>	
		</div>		
@stop