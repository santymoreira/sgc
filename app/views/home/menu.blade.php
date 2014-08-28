<!doctype html>

    {{ HTML::script('js/smoke.js'); }}
    {{ HTML::script('js/jquery-1.8.2.min.js'); }}
    {{ HTML::script('js/ResponsiveTabs.js'); }}
    {{ HTML::script('js/login.js'); }}
    {{ HTML::script('js/opciones_presentacion.js'); }} 
  <!--        estilo modal-->
  {{ HTML::script('js/jquery-ui-1.8.20.custom.min.js'); }} 
  {{ HTML::script('js/calendario.js'); }} 

    {{ HTML::style('css/smoke.css'); }}
    {{ HTML::style('css/estilo.css'); }}
    <!--        estilo cabecera-->
    {{ HTML::style('css/easy-responsive-tabs.css'); }}
    {{ HTML::style('css/floatbox.css'); }}
    {{ HTML::style('css/style.css'); }}
    {{ HTML::style('css/kik.css'); }}
    {{ HTML::style('css/menu22.css'); }}
    <!--        estilo modal-->
  {{ HTML::style('css/style_tables.css'); }}
  {{ HTML::style('css/styles.css'); }}
  {{ HTML::style('css/select.css'); }}
  {{ HTML::style('css/feature_table.css'); }}
  {{ HTML::style('css/jquery-ui-1.8.20.custom.css'); }}

  @section('buttons')

                                  <div id="menu">
<ul>
  <li class="nivel1"><a href="#" class="nivel1">SGC</a>
	<ul class="uno">
                <li><a href="Vista/MacroFADE.php">FADE</a></li>
            	<li><a href="#">Gestion de Transporte</a></li>
                <li><a href="#">Administracion de Empresas</a></li>
                <li><a href="#">Marketing</a></li>
                  <li>{{ HTML::link('contabilidad/cont_audi_sgc', 'Contabilidad y Auditoria'); }}</li>
                <li><a href="#">Educacion a Distancia</a></li>
                <li><a href="#">Comercio Exterior</a></li>
                <li><a href="#">Finanzas</a></li>
	</ul>
  </li>
  <li class="nivel1"><a href="#" class="nivel1">BSC</a>
	<ul class="dos">
		<li><a href="#">FADE</a></li>
		<li><a href="#">Gestion de Transporte</a></li>
                <li><a href="#">Administracion de Empresas</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Contabilidad y Auditoria</a></li>
                <li><a href="#">Educacion a Distancia</a></li>
                <li><a href="#">Comercio Exterior</a></li>
                <li><a href="#">Finanzas</a></li>
	</ul>
</li>
  
</ul>
</div>-

                        @show