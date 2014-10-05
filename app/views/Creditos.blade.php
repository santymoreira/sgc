
@extends('home.layout')
@section('Different_Styles')
{{ HTML::style('css/menu24.css'); }} 
{{ HTML::style('css/creditos.css'); }} 
@stop
@section('options')
     
      <div id="menu">
    <ul>
            <li class="nivel1"><a class="nivel1" href="{{ URL::previous() }}">Atras</a>
         </ul>      
    </div>  
                 
@stop


@section('content')
@stop

@section('body')
          <div class="layout-cell content">     
            <div id="central">
            <div id="apDiv9"><h1>Créditos</h1></div>
             <div id="apDiv8">
             <center>	<img src="{{asset('images/creditos/alpa.png')}}" alt="equipo de consultoría" width="148" height="134"  id="img_alpa" />
                    <p class="empresa">&nbsp;</p>
                    <p class="empresa"><b>Alpa Consultores</b></p>
                    <p class="descripcion"> Sistemas de Gestión de la Calidad, Planificación Estratégica Balanced Scored Card</p>
                    <p class="correo"> alpaconsultoresec@hotmail.com </p></center>
             </div>
             <div id="apDiv10">
             	  <br/>	 <br/>	 <br/>	
             	 <img src="{{asset('images/creditos/devtem.png')}}" alt="equipo de desarrollo de software deaft team" width="300" height="34" id="img_dev" />
               <center>     <p class="empresa">&nbsp;</p>
                    <p class="empresa">&nbsp;</p>
                    <p class="empresa">&nbsp;</p>
                    <p class="empresa">&nbsp;</p>
                    <p class="empresa"><b>Dev Team</b></p>
                    <p class="descripcion"> Desarrollo Web por Gestión de Procesos </p>
                    <p class="correo"> devteam@outlook.es </p> </center>
             </div>
             <div id="apDiv11">
             	  <img src="{{asset('images/creditos/xperience.png')}}" alt="equipo de diseño gráfico xperience design" width="298" height="208" id="img_xperience" />
                   <center> <p class="empresa"><b>Xperience</b></p>
                    <p class="descripcion"> Diseño de Imagen Corporativa </p>
                    <p class="correo"> xperience_design@outlook.com </p></center>
             </div>
             <div id="apDiv12">
             <br/><br/><br/>
               		<img src="{{asset('images/creditos/hellfox2.png')}}" alt="equipo de desarrollo de software Hellfox Team Solutions" width="304" height="100" id="img_hellfox" />
               		 <p class="empresa">&nbsp;</p>
               		 <p class="empresa">&nbsp;</p>
               		 <p class="empresa">&nbsp;</p>
               	<center>	 <p class="empresa">&nbsp;</p>
               	  <p class="empresa"><b>HellFox Team Solutions</b></p>
               		 <p class="descripcion"> Desarrollo Web y Sistemas Informáticos</p>
               		 <p class="correo"> helfoxteam@outlook.com</p> </center>
             </div>
            	</div>

            </div>
@stop