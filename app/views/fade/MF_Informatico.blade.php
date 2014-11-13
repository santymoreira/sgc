@extends('home.layout')

@section('Different_Styles')
	@parent
	{{ HTML::style('css/StylesInformaticoF.css'); }}
   {{ HTML::script('js/LinksMacroprocesosFade.js'); }}


@stop

@section('options')
   	
   			 <div id="menu">
						<ul>
				       		<li class="nivel1"><a class="nivel1" {{ HTML::link('fade/fade_sgc', 'SGC'); }} 
                       		<li class="nivel1"><a class="nivel1" {{ HTML::link('fade/macroprocesos','Volver'); }}  
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

	<div class="content-layout" >
        
        <div id="apDiv31">
        	<img src="{{ asset('images/Fade/informatico/contenedor.png') }}">
        </div>

        <!-- procesos de la gestion informatica en la facultad -->

         <div id="apDiv116">
            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-01)/proceso.jpg') }}" rel="slideshow1">
                           <img id="afea121" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-01.png') }}">
                               <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-02)/diagrama.jpg') }}" rel="slideshow1"/>
                               <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-02)/indicador.jpg') }}" rel="slideshow1"/>
           </a>      
        </div>
        <div id="apDiv117">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-02)/proceso.jpg') }}" rel="slideshow2">
                          <img id="afea122" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-02.png') }}">
                              <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-02)/diagrama.jpg') }}" rel="slideshow2"/>
                              <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-02)/indicador.jpg') }}" rel="slideshow2"/>
                    </a>              
        </div>
        <div id="apDiv118">
            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-03)/proceso.jpg') }}" rel="slideshow3">
                        <img id="afea123" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-03.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-03)/diagrama.jpg') }}" rel="slideshow3"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-03)/indicador.jpg') }}" rel="slideshow3"/>
              </a>              
        </div>
        <div id="apDiv119">
              <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-04)/proceso.jpg') }}" rel="slideshow4">
                        <img id="afea124" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-04.png') }}">
                        <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-04)/diagrama.jpg') }}" rel="slideshow4"/>
                        <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-04)/indicador.jpg') }}" rel="slideshow4"/>
              </a>         
        </div>
        <div id="apDiv120">
                <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-05)/proceso.jpg') }}" rel="slideshow5">
                        <img id="afea125" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-05.png') }}">
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-05)/diagrama.jpg') }}" rel="slideshow5"/>
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-05)/indicador.jpg') }}" rel="slideshow5"/>
                </a>           
        </div>
        <div id="apDiv121">
                 <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-06)/proceso.jpg') }}" rel="slideshow6">
                        <img id="afea126" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-06.png') }}">
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-06)/diagrama.jpg') }}" rel="slideshow6"/>
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-06)/indicador.jpg') }}" rel="slideshow6"/>
                </a>    
        </div>
        <div id="apDiv122">
            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-07)/proceso.jpg') }}" rel="slideshow7">
                        <img id="afea127" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-07.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-07)/diagrama.jpg') }}" rel="slideshow7"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-07)/indicador.jpg') }}" rel="slideshow7"/>
                </a>
        </div>
        <div id="apDiv123">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-08)/proceso.jpg') }}" rel="slideshow8">
                        <img id="afea128" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-08.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-08)/diagrama.jpg') }}" rel="slideshow8"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-08)/indicador.jpg') }}" rel="slideshow8"/>
                </a>
        </div>
        <div id="apDiv124">
                  <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-09)/proceso.jpg') }}" rel="slideshow9">
                      <img id="afea129" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-09.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-09)/diagrama.jpg') }}" rel="slideshow9"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-09)/indicador.jpg') }}" rel="slideshow9"/>
                </a>
        </div>
        <div id="apDiv125">
                   <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-10)/proceso.jpg') }}" rel="slideshow10">
                      <img id="afea1210" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-10.png') }}">
                        <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-10)/diagrama.jpg') }}" rel="slideshow10"/>
                        <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-10)/indicador.jpg') }}" rel="slideshow10"/>
                </a>     
        </div>
        <div id="apDiv126">
                     <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-11)/proceso.jpg') }}" rel="slideshow11">
                        <img id="afea1211" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-11.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-11)/diagrama.jpg') }}" rel="slideshow11"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-11)/indicador.jpg') }}" rel="slideshow11"/>
                </a>        
        </div>
        <div id="apDiv127">
                 <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-12)/proceso.jpg') }}" rel="slideshow12">
                        <img id="afea1212" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-12.png') }}">
                         <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-12)/diagrama.jpg') }}" rel="slideshow12"/>
                         <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-12)/indicador.jpg') }}" rel="slideshow12"/>
                </a>        
        </div>
        <div id="apDiv128">
                <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-13)/proceso.jpg') }}" rel="slideshow13">
                        <img id="afea1213" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-13.png') }}">
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-13)/diagrama.jpg') }}" rel="slideshow13"/>
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-13)/indicador.jpg') }}" rel="slideshow13"/>
                </a>       
        </div>
        <div id="apDiv129">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-14)/proceso.jpg') }}" rel="slideshow14">
                        <img id="afea1214" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-14.png') }}">
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-14)/diagrama.jpg') }}" rel="slideshow14"/>
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-14)/indicador.jpg') }}" rel="slideshow14"/>
                </a>                                   
        </div>
        <div id="apDiv130">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-15)/proceso.jpg') }}" rel="slideshow15">
                         <img id="afea1215" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-15.png') }}">
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-15)/diagrama.jpg') }}" rel="slideshow15"/>
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-15)/indicador.jpg') }}" rel="slideshow15"/>
                   </a>            
        </div>
        <div id="apDiv166">
                  <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-16)/proceso.jpg') }}" rel="slideshow16">
                         <img id="afea1216" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-16.png') }}">
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-16)/diagrama.jpg') }}" rel="slideshow16"/>
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-16)/indicador.jpg') }}" rel="slideshow16"/>
                   </a>                 
        </div>
        <div id="apDiv168">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-17)/proceso.jpg') }}" rel="slideshow17">
                        <img id="afea1217" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-17.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-17)/indicador.jpg') }}" rel="slideshow17"/>
                   </a>          
        </div>
        <div id="apDiv169">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-18)/proceso.jpg') }}" rel="slideshow18">
                        <img id="afea1218" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-18.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-18)/diagrama.jpg') }}" rel="slideshow18"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-18)/indicador.jpg') }}" rel="slideshow18"/>
                   </a>                
        </div>
        <div id="apDiv170">
                      <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-19)/proceso.jpg') }}" rel="slideshow19">
                        <img id="afea1219" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-19.png') }}">
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-19)/diagrama.jpg') }}" rel="slideshow19"/>
                           <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-19)/indicador.jpg') }}" rel="slideshow19"/>
                    </a>                   
        </div>
        <div id="apDiv171">
               <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-20)/proceso.jpg') }}" rel="slideshow20">
                    <img id="afea1220" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-20.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-20)/diagrama.jpg') }}" rel="slideshow20"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-20)/indicador.jpg') }}" rel="slideshow20"/>
              </a>                
        </div>
        <div id="apDiv172">
                  <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-21)/proceso.jpg') }}" rel="slideshow21">
                        <img id="afea1221" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-21.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-21)/diagrama.jpg') }}" rel="slideshow21"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-21)/indicador.jpg') }}" rel="slideshow21"/>
                 </a>           
        </div>
        <div id="apDiv173">
                  <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-22)/proceso.jpg') }}" rel="slideshow22">
                        <img id="afea1222" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-22.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-22)/diagrama.jpg') }}" rel="slideshow22"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-22)/indicador.jpg') }}" rel="slideshow22"/>
                 </a>     
        </div>
        <div id="apDiv174">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-23)/proceso.jpg') }}" rel="slideshow23">
                        <img id="afea1223" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-23.png') }}">
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-23)/diagrama.jpg') }}" rel="slideshow23"/>
                            <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-23)/indicador.jpg') }}" rel="slideshow23"/>
                 </a>               
        </div>
        <div id="apDiv175">
                    <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-24)/proceso.jpg') }}" rel="slideshow24">
                        <img id="afea1224" style="cursor:pointer" src="{{ asset('images/Fade/informatico/afea12-24.png') }}">
                          <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-24)/diagrama.jpg') }}" rel="slideshow24"/>
                          <a  href="{{ asset('images/Fade/FichasProcesos/fichas(afea12-24)/indicador.jpg') }}" rel="slideshow24"/>
                 </a>      

        </div>   

        <!-- códigos de los procesos de la facultad -->      

       <div id="apDiv147">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-01.png') }}" width="68" height="20" id="afea12_01">
       </div>
       <div id="apDiv148">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-02.png') }}" width="68" height="20" id="afea12_02">
       	</div>
       <div id="apDiv150">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-03.png') }}" width="68" height="20" id="afea12_03">
       	</div> 
       <div id="apDiv151">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-04.png') }}" width="68" height="20" id="afea12_04">
       	</div>
       <div id="apDiv152">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-05.png') }}" width="68" height="20" id="afea12_05">
       	</div>
       <div id="apDiv153">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-06.png') }}" width="68" height="20" id="afea12_06">
       	</div>
       <div id="apDiv154">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-07.png') }}" width="68" height="20" id="afea12_07">
       	</div>
       <div id="apDiv155">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-08.png') }}" width="68" height="20" id="afea12_08">
       	</div>
       <div id="apDiv156">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-09.png') }}" width="68" height="20" id="afea12_09">
       	</div>
       <div id="apDiv157">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-10.png') }}" width="68" height="20" id="afea12_10">
       	</div>
       <div id="apDiv158">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-11.png') }}" width="68" height="20" id="afea12_11">
       	</div>
       <div id="apDiv159">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-12.png') }}" width="68" height="20" id="afea12_12">
       	</div>
       <div id="apDiv160">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-13.png') }}" width="68" height="20" id="afea12_13">
       	</div>
       <div id="apDiv161">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-14.png') }}" width="68" height="20" id="afea12_14">
       	</div>
       <div id="apDiv162">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-15.png') }}" width="68" height="20" id="afea12_15">
       	</div>
       <div id="apDiv178">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-16.png') }}" width="61" height="17" id="afea12_16">
       	</div>
       <div id="apDiv179">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-17.png') }}" width="61" height="17" id="afea12_17">
       	</div>
       <div id="apDiv180">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-18.png') }}" width="61" height="17" id="afea12_18">
       	</div>
       <div id="apDiv181">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-19.png') }}" width="61" height="17" id="afea12_19">
       	</div>
       <div id="apDiv182">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-20.png') }}" width="61" height="17" id="afea12_20">
       	</div>
       <div id="apDiv183">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-21.png') }}" width="61" height="17" id="afea12_21">
       	</div>
       <div id="apDiv184">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-22.png') }}" width="61" height="17" id="afea12_22">
       	</div>
       <div id="apDiv185">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-23.png') }}" width="61" height="17" id="afea12_23">
       	</div>
       <div id="apDiv186">
       		<img src="{{ asset('images/Fade/informatico/cod_afea12-24.png') }}" width="61" height="17" id="afea12_24">
       	</div>
    
    	<!-- Macroprocesos de la facultad -->

    	<div id="apDiv105">
    		<img src="{{ asset('images/Fade/administrativa.png') }}" width="604" height="48" id="administrativa" style="cursor:pointer;" onclick="Administrativa()">
    	</div>
        <div id="apDiv106">
        	<img src="{{ asset('images/Fade/academica.png') }}" width="604" height="48" id="academica" style="cursor:pointer;"  onclick="Academica()">
        </div>
        <div id="apDiv107">
        	<img id="calidad" style="cursor:pointer;" width="604" height="48" onclick="Calidad()" src="{{ asset('images/Fade/calidad.png') }}">
        </div>
        <div id="apDiv108">
        	<img id="docencia" style="cursor:pointer;" onclick="Docencia()" src="{{ asset('images/Fade/docencia.png') }}" width="196" height="63">
        </div>
        <div id="apDiv109">
        	<img id="investigacion" style="cursor:pointer;" onclick="Investigacion()" src="{{ asset('images/Fade/investigacion.png') }}" width="196" height="63">
        </div>
        <div id="apDiv110">
        	<img id="vinculacion" style="cursor:pointer;" onclick="Vinculacion()" src="{{ asset('images/Fade/vinculacion.png') }}" width="196" height="63">
        </div>
        <div id="apDiv111">
        	<img id="asistencia" style="cursor:pointer;" width="604" height="48" src="{{ asset('images/Fade/asistencia.png') }}">
        </div>
        <div id="apDiv112">
        	<img id="academico" style="cursor:pointer;" onclick="Academico()"  width="604" height="48" src="{{ asset('images/Fade/academico.png') }}">
        </div>
        <div id="apDiv113">
        	<img id="financiero" style="cursor:pointer;" onclick="Financiero()" width="604" height="48" src="{{ asset('images/Fade/financiero.png') }}">
        </div>
        <div id="apDiv114">
        	<img id="mantenimiento" style="cursor:pointer;" width="604" height="48" src="{{ asset('images/Fade/mantenimiento.png') }}">
        </div>
        <div id="apDiv115">
        	<img id="transporte" style="cursor:pointer;" onclick="Transporte()" width="604" height="48" src="{{ asset('images/Fade/transporte.png') }}">
        </div>

        <!-- Responsables de los procesos azul(entrada) rojo(salida) -->

       <div id="apDiv187">
       		<img src="{{ asset('images/Responsables/internos_azul.png') }}">
       	</div>
       <div id="apDiv188">
       		<img onmouseover="ImgAzulReglamento()" onmouseout="BackAzulReglamento()" src="{{ asset('images/Responsables/reglamento.png') }}">
       	</div>
       <div id="apDiv189">
       		<img onmouseover="ImgAzulESPOCH()" onmouseout="BackAzulESPOCH()" src="{{ asset('images/Responsables/espoch.png') }}">
       	</div>
       <div id="apDiv190">
       		<img onmouseover="ImgAzulDecanato()" onmouseout="BackAzulDecanato()" src="{{ asset('images/Responsables/decanato.png') }}">
       	</div>
       <div id="apDiv191">
       		<img onmouseover="ImgAzulVicedecanato()" onmouseout="BackAzulVicedecanato()" src="{{ asset('images/Responsables/vicedecanato.png') }}">
       	</div>
       <div id="apDiv192">
       		<img src="{{ asset('images/Responsables/docentes.png') }}">
       	</div>
       <div id="apDiv193">
       		<img src="{{ asset('images/Responsables/poa_pac.png') }}">
       	</div>
       <div id="apDiv194">
       		<img src="{{ asset('images/Responsables/escuelas.png') }}">
       	</div>
       <div id="apDiv195">
       		<img src="{{ asset('images/Responsables/edificio.png') }}" >
       	</div>
       <div id="apDiv196">
       		<img src="{{ asset('images/Responsables/fade.png') }}">
       	</div>
       <div id="apDiv197">
       		<img src="{{ asset('images/Responsables/externo.png') }}">
       	</div>
       <div id="apDiv198">
       		<img src="{{ asset('images/Responsables/estatutoPizq.png') }}">
       	</div>
       <div id="apDiv199">
       		<img src="{{ asset('images/Responsables/internos_azul_dere.png') }}">
       	</div>
       <div id="apDiv200">
       		<img src="{{ asset('images/Responsables/reglamento.png') }}">
       	</div>
       <div id="apDiv201">
       		<img src="{{ asset('images/Responsables/web.png') }}">
       	</div>
       <div id="apDiv202">
       		<img src="{{ asset('images/Responsables/decanato.png') }}">
       	</div>
       <div id="apDiv203">
       		<img src="{{ asset('images/Responsables/vicedecanato.png') }}">
       	</div>
       <div id="apDiv204">
       		<img src="{{ asset('images/Responsables/docentes.png') }}">
       	</div>
       <div id="apDiv205">
       		<img src="{{ asset('images/Responsables/archivo.png') }}">
       	</div>
       <div id="apDiv206">
       		<img src="{{ asset('images/Responsables/estudiante.png') }}">
       	</div>
       <div id="apDiv207">
       		<img src="{{ asset('images/Responsables/fade.png') }}">
       	</div>
       <div id="apDiv208">
       		<img src="{{ asset('images/Responsables/espoch.png') }}">
       	</div>
       <div id="apDiv209">
       		<img src="{{ asset('images/Responsables/externo.png') }}">
       	</div>
       <div id="apDiv210">
       		<img src="{{ asset('images/Responsables/estatutoPizq.png') }}">
       	</div>



                               
          <!-- Footer --> 
            
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br></br></br> </br></br></br></br></br></br></br></br>
            </br></br></br></br></br></br>
            
        <center>
        <p style="font-size:10px;color:#03F">&nbsp;</p>

           <p style="font-size:10px;color:#03F">Copyright 2014. All Rights Reserved | 
                    <a style="font-size:10px;color:#03F" {{ HTML::link('Creditos','Créditos'); }}
            </p>

            </center> 

     </div>  

@stop     