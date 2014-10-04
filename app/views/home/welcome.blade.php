@extends('home.layout')
@section('options')
     @parent
@stop
@section('login')
   @parent
@stop
@section('content')
@stop
@section('body')
                <div class="container">
                    <div class="content-layout-row">
                        <div class="layout-cell sidebar1">
                            <div class="cleared"></div>
                        </div>
                        <div class="layout-cell content">     
                            <div id="central">
                                <div id="central-content">
                                 <div style="cursor:pointer;">
                                        <img src="{{ asset('images/Utilitarios/logo.png'); }}" width="50" height="50"> </img>
                                 </div>
                                  <p><b>Volver</b></p>
                                    <div id="avance"></div>
                                        <center><label>Cumplimiento&nbsp;&nbsp;&nbsp;</label><a rel="floatbox" class="fbPopup" href="Vista/ReportesIndicadores/pChart2.1.4/examples/pictures/avancefade.jpg" /><input type="image" src="{{asset('images/Utilitarios/chart_bar.png'); }}"/></a> </center>
                                        </br>
                                         </br>
                                         <div class="demo">
                                        	<div id="GestiondeCalidad">
                                            	<ul class="resp-tabs-list">    
                                                	<li>SGC</li>
                                                	<li>Mision y Vision</li>
                                                	<li>Objetivos de Calidad</li>
                                                	<li>Compromisos</li>
                                                	<li>Mensaje de la Comision</li>
                                                	<li>Contactanos</li>
                                                	<li>Redes Sociales</li>
                                             	</ul>                         
                      							<div class="resp-tabs-container">
                                   			<div id="central-content">
                              							<center><img src="{{ asset('images/Utilitarios/logo.png'); }}"> </img></center>
                          							</div>
                         							<div id="central-content">
                            							<center><h1>Misión</h1></center></br>
                            							<p  align="justify">"Formar profesionales competitivos, emprendedores, concientes de su identidad nacional, justicia social, democracia y preservación del ambiente sano, a través de la generación, transmisión, adaptación y aplicación del conocimiento científico y tecnológico para contribuir al desarrollo sustentable de nuestro país".</p>
                            							<center><h1>Visión</h1></center></br>
                            							<p align="justify">"Ser una institución universitaria líder en la Educación Superior y en el soporte científico y tecnológico para el desarrollo socioeconómico y cultural de la provincia de Chimborazo y del país, con calidad, pertinencia y reconocimiento social".</p>
                        							</div>
                       <div id="central-content">
                            <center><h1>Objetivos de Calidad</h1></center></br>
                            <p align="justify"> - Lograr una administración moderna y eficiente en el ámbito académico, administrativo y de desarrollo institucional.</p> </br>
                            <p align="justify"> - Establecer en la ESPOCH una organización sistémica, flexible, adaptativa y dinámica para responder con oportunidad y eficiencia a las expectativas de nuestra sociedad.</p></br>
                            <p align="justify"> - Desarrollar una cultura organizacional integradora y solidaria para facilitar el desarrollo individual y colectivo de los politécnicos.</p></br>
                            <p align="justify"> - Fortalecer el modelo educativo mediante la consolidación de las unidades académicas, procurando una mejor articulación entre las funciones universitarias.</p></br>
                            <p align="justify"> - Dinamizar la administración institucional mediante la desconcentración de funciones y responsabilidades, procurando la optimización de los recursos en el marco de la Ley y del Estatuto Politécnico.</p></br>
                            <p align="justify"> - Impulsar la investigación básica y aplicada, vinculándola con las otras funciones universitarias y con los sectores productivos y sociales.</p>
                       </div>
                        <div id="central-content">
                              <center><h1>Compromisos</h1></center></br>
                              <p align="justify">La ESPOCH es una Institución pública que fundamenta su acción en los principios de: autonomía, democracia, cogobierno, libertad de cátedra e inviolabilidad de sus predios. Estimula el respeto de los valores inherentes de la persona, que garantiza la libertad de pensamiento, expresión, culto, igualdad, pluralismo, tolerancia, espíritu crítico y cumplimiento de las Leyes y normas vigentes.</p>
                          </div>
                          <div id="central-content">
                               <center><h1>Mensaje de la Comisión</h1></center></br>
                               <p align="justify"> • Impartir enseñanza a nivel de pregrado, postgrado y educación continua, en ciencia y tecnología, basadas en la investigación y la producción de bienes y servicios;</p></br>
                               <p align="justify"> • Realizar investigación científica y tecnológica para garantizar la generación, asimilación y adaptación de conocimientos que sirvan para solucionar los problemas de la sociedad ecuatoriana;</p></br>
                               <p align="justify"> • Formar profesionales líderes con sólidos conocimientos científicos, tecnológicos, humanísticos; con capacidad de autoeducarse, de comprender la realidad socioeconómica del país, Latinoamérica y el mundo; que cultiven la verdad, la ética, la solidaridad; que sean ciudadanos responsables que contribuyan eficaz y creativamente al bienestar de la sociedad;</p></br>
                               <p align="justify"> • La búsqueda permanente de la excelencia académica a través de la práctica de la calidad en todas sus actividades; y,</p></br>
                               <p align="justify"> • Fomentar el desarrollo de la cultura nacional y universal para fortalecer nuestra identidad nacional y sus valores. </p>
                          </div>
                            <div id="central-content">
                              <center><h1>Contáctanos</h1></center></br>
                               <p align="justify">La comisión de Gestión de Calidad de la Facultad cuenta con los siguientes contactos:</p></br></br>
                               <p align="justify"><b> Facebook Oficial:</b> <a href="https://www.facebook.com/facultadde.empresas.1" target="_blanck">www.facebook.com/facultadde.empresas.1</a> </p></br>
                               <img src="{{ asset('images/Utilitarios/facebook.gif'); }}" width="40" height="40" alt=""/> <br></br>
                               <p align="justify"><b> Twitter Oficial:</b> <a href="https://twitter.com/FadeEspoch" target="_blanck" >twitter.com/FadeEspoch</a>   </p></br>  
                               <img src="{{ asset('images/Utilitarios/twitter.png'); }}" width="40" height="40" alt=""/> <br></br>
                              
                          </div>
                          <div id="central-content">
                                <center><h1>Redes Sociales</h1></center></br>
                                   <div class="fb-like-box" data-href="https://www.facebook.com/pages/Comisi%C3%B3n-Gesti%C3%B3n-de-Calidad-FADE/659319644160604?ref_type=bookmark" data-width="650" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div> 
                          </div>
                          
                          <div id="central-content">
                          </div>
                           
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
			</br>
              <div class="cleared"></div>
          </div>
          <div class="layout-cell sidebar2">
            <div class="cleared"></div>
          </div>
        </div>
      </div>

      <div class="cleared"></div>
      <div class="footer">
        <div class="footer-t"></div>
        <div class="footer-l"></div>
        <div class="footer-b"></div>
        <div class="footer-r"></div>
        <div class="cleared"></div>
      </div>
    </div>
    <div class="cleared"></div>
  </div>
</div>
 <div class="cleared"></div>

<center>
  <p style="font-size:10px;color:#03F">Copyright © 2014. All Rights Reserved.</p>
</center>

@stop