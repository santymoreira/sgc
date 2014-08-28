@extends('home.layout')
 
@section('cabeza')
  
@stop

@section('options')
@stop

@section('login')
@stop
 
@section('content')
        <h1>   

   <div style="margin-top:20px; text-align:center;">
        <!--<div id="content" >-->
            <h2>Proceso: Yo </h2>
               <h3>Responsable: Yo </h3>
                                                           <table class="features-table">
                                    <label><b>Fecha Inicio:</b></label>
                                             <input id="date1" name="date1" class="datepicker"/>
                                        <label><b>Fecha Fin:</b></label>  
                                            <input id="date2" name="date2" class="datepicker"/>
<br></br>
                            <thead>
                                    <tr>
                                        <td></td>
                                        <td scope="col" abbr="Docentes">Nombres</td>
                                        <td scope="col" abbr="Procesos">Procesos</td>
                                         <td scope="col" abbr="Estado">Estado</td>
                                    </tr>
                            </thead>
                              </table>
               <br></br>
              <div id="contenido"></div>
              
             </div>


<table class="features-table">
<tbody>
@foreach($empleados as $empleado)
<tr>
  <td scope='row'>
    {{ $empleado->COD_PROCESO }}
  </td>
  <td scope='row'>
    {{ $empleado->DESCRIPCION }}
  </td>
  <td>
    <select id="{{ $empleado->COD_PROCESO }}" class="select" style="width: 200px;"><option value="1" selected>Seleccione opción</option><option value="2">Sí</option><option value="3">No</option>
    </select>
  
  </td>

</tr>
 @endforeach


<script type='text/javascript'>
$('select').change(function(){
    
    var ide = $(this).attr('id');
    alert(ide);
    //Alert::has('success')

} );
</script>

@stop
