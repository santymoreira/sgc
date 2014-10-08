<?php

class UserController extends \BaseController {

	
	public function getEscuela()
	{
		$tipoAdmin=0;
		$cod=Auth::user()->COD_EMPLEADO;
		$query4= DB::select('SELECT empt.COD_TIPO FROM empleado AS e INNER JOIN empleado_tipo AS empt ON e.`COD_EMPLEADO`=empt.`COD_EMPLEADO` WHERE empt.COD_EMPLEADO='.$cod.' ;');
		foreach ($query4 as $cont) {	
			$tipo = $cont->COD_TIPO;
				if($tipo==10)
				{
					$tipoAdmin=1;
				}
			 }
		return $tipoAdmin;
	}


		public function permiso()
		{
			return Login::tiempoSesion();
		}	


	//Listar los usuarios del SGC.
	
	public function listado($escuela){
	
		if ($this->permiso()==1) 
			{		if ($this->getEscuela()==1) {
					$query=DB::select('CALL listado('.$escuela.')');
					return View::make('users.empleados')->with('users',$query); 
				}
				else{	
				$denied = 'denied';
				if($escuela ==1 ){return View::make('mapas.empresas_sgc')->with('denied',$denied);}
				if($escuela ==2){return View::make('mapas.cont_audi_sgc')->with('denied',$denied);}		
				if($escuela ==3){return View::make('mapas.exterior_sgc')->with('denied',$logout);}
				if($escuela ==4){return View::make('mapas.finanzas_sgc')->with('denied',$denied);}
				if($escuela ==5){return View::make('mapas.marketing_sgc')->with('denied',$denied);}
				if($escuela ==6){return View::make('mapas.transporte_sgc')->with('denied',$denied);}
				if($escuela ==8){return View::make('mapas.fade_sgc')->with('denied',$denied);}
				}
			}
			elseif ($this->permiso()==0) {
				$logout = 'logout';
				if($escuela ==1){return View::make('mapas.empresas_sgc')->with('logout',$logout);}
				if($escuela ==2){return View::make('mapas.cont_audi_sgc')->with('logout',$logout);}		
				if($escuela ==3){return View::make('mapas.exterior_sgc')->with('logout',$logout);}
				if($escuela ==4){return View::make('mapas.finanzas_sgc')->with('logout',$logout);}
				if($escuela ==5){return View::make('mapas.marketing_sgc')->with('logout',$logout);}
				if($escuela ==6){return View::make('mapas.transporte_sgc')->with('logout',$logout);}
				if($escuela ==8){return View::make('mapas.fade_sgc')->with('logout',$logout);}
    		}
    	else{Login::logout();}
        		return Redirect::back();
	}
	public function newuser()	{

	    $cedula =DB::select('SELECT ci FROM empleado');
		return View::make('users.create')->with('ci',$cedula);
	}
	


	public function store($esc)
	{
		$empleado = new Empleado;
		
		//Valiables table empleado
		$var=Input::get('nombres');
		$cedu=Input::get('ci');
		//Tipos empleado
		$temp1=Input::get('director');
		$temp2=Input::get('admin');
		$temp3=Input::get('trabajador');
		$temp4=Input::get('docente');

		//Información Peronal
		$empleado->CI= Input::get('ci');
		$empleado->NOMBRES= Input::get('nombres');
		$empleado->SEXO= Input::get('sexo');
		$empleado->EMAIL= Input::get('email');
		$empleado->CELULAR= Input::get('celular');
		$empleado->CONVENCIONAL= Input::get('convencional');
		$empleado->password= Hash::make(Input::get('ci'));


		//Empleado en otra escuela
		$Uexist=DB::select('SELECT COUNT(COD_EMPLEADO) as valor FROM empleado WHERE CI =?', array($cedu));
					foreach ($Uexist as $cont) {	$ced = $cont->valor; }
	
		if($ced ==0)
		{
			$inputs	= Input::all();
			$reglas = array(
				  'ci' => 'required|regex:/^([0-9])+$/i|size:10|unique:empleado,CI',
				  'nombres' => 'required',
				  'email' => 'required|email',
				  'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:9',
			);
		}
		else{ 
					$query3=DB::select('SELECT COD_EMPLEADO FROM empleado WHERE CI =?', array($cedu));
						foreach ($query3 as $cont1) {	$aux2 = $cont1->COD_EMPLEADO; }
			
				$ExistEsc=DB::select('SELECT COUNT(COD_EMPLEADO) as valor FROM empleado_escuela WHERE COD_EMPLEADO =? AND COD_ESCUELA=?', array($aux2,$esc));
					foreach ($ExistEsc as $cont) {	$escueMisma = $cont->valor; }

					if($escueMisma == 0){ 

						$inputs	= Input::all();
						$reglas = array(
							  'ci' => 'required|regex:/^([0-9])+$/i|size:10a',   
							  'nombres' => 'required',
							  'email' => 'required|email',
							  'celular' => 'regex:/^([0-9])+$/i|size:10',
							  'convencional' => 'regex:/^([0-9])+$/i|size:9',	
					);
				}
				 else{
					  	return Redirect::back()->with('mismaEsc', 'Este empleado ya se encuentra registrado en esta Escuela.');
					 }
		}
			$mensajes = array(
					'required' => 'Campo Obligatorio',
					'size' => 'El campo debe tener la cantidad de dígitos correcta, vuelva a intenralo',
					'email' => 'El email no tiene la sintaxis correcta, vuelva a intenralo',
					'unique' => 'El cédula ingresada ya existe, vuelva a intenralo',
					'regex' => 'Solo se acepta caracteres numéricos, vuelva a intenralo',
				);	

			$validar = Validator::make($inputs,$reglas,$mensajes);
	

	if($validar->fails())
	{
			return Redirect::back()->withErrors($validar);
	}
	else{

		if(!empty($temp1) || !empty($temp2) || !empty($temp3) || !empty($temp4))
	{
		$directorEs= DB::select('SELECT COUNT(empe.COD_TIPO) AS valor FROM empleado_tipo AS empe WHERE empe.COD_TIPO=? AND empe.COD_ESCUELA = ?', array($temp1,$esc));
		foreach ($directorEs as $cont) {	$contador = $cont->valor; }

	if($contador == 0)
	{	
		if($ced == 0)
		{
		  if($empleado->save()){

			$query=DB::select('SELECT COD_EMPLEADO FROM empleado WHERE NOMBRES =?', array($var));
			foreach ($query as $cont) {	$aux = $cont->COD_EMPLEADO; }
			
			
			//Id del usuario.
			 $emp=Empleado::find($aux);
			
    
		   //Save in the table pivot (empleado_tipo) and (empleado_escuela)	

			 	$escuelas=Escuela::find($esc); 
			    $empleado->escuelas()->save($escuelas);
			  
			    if (!empty($temp1))
			    {
			  		 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp1,$aux,$esc));
		
			   }
			    if (!empty($temp2))
			    {
			    	 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp2,$aux,$esc));
			    }
			    if (!empty($temp3))
			    {
			    	  DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp3,$aux,$esc));
			    }
			    if (!empty($temp4))
			    {
			    	 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp4,$aux,$esc));
			    }
 		
			Session::flash('message','Guardado correctamente!');
			Session::flash('class','success');
		   
		}

		else{
				Session::flash('message','A ocurrido un error!');
				Session::flash('class','danger');	
			}
		return Redirect::to('users/create'); 
	  }
	  else
	  {
	  	$query1=DB::select('SELECT COD_EMPLEADO FROM empleado WHERE CI =?', array($cedu));
			foreach ($query1 as $cont1) {	$aux1 = $cont1->COD_EMPLEADO; }
			
			
		 DB::insert('insert into empleado_escuela (COD_EMPLEADO, COD_ESCUELA) values (?, ?)', array($aux1,$esc));
		
			  
			    if (!empty($temp1))
			    {
			  		 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp1,$aux1,$esc));
		
			   }
			    if (!empty($temp2))
			    {
			    	 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp2,$aux1,$esc));
			    }
			    if (!empty($temp3))
			    {
			    	  DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp3,$aux1,$esc));
			    }
			    if (!empty($temp4))
			    {
			    	 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp4,$aux1,$esc));
			    }
 		
			Session::flash('message','Guardado correctamente!');
			Session::flash('class','success');

		return Redirect::to('users/create');
	  }
	}
	  else{
	  	return Redirect::back()->with('exist', 'Ya existe un Director de Escuela registrado, Ingrese otra función al Empleado.');
	  }

	}
		else
		{
			return Redirect::back()->with('msg', 'Tiene que asignarle almenos una función al empleado, vuelve a intentarlo.');
		}
	}
}

	public function show($id,$esc)
	{
		$user= DB::select('CALL ShowEmpleado('.$id.','.$esc.')');
		return View::make('users.show')->with('user',$user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editp($id)
	{
		//$user= DB::select('CALL ShowEmpleado('.$id.')');
		$contrasena1=0;
		$user =  Empleado::find($id);
		return View::make('users.editp',array('user'=>$user));
	}
	public function updatep($id)
	{
		$empleado= Empleado::find($id);
		
		$file = Input::file("photo");
		$var=$empleado->CI= Input::get('ci');
		$empleado->CI= Input::get('ci');
		$empleado->NOMBRES= Input::get('nombres');
		$empleado->SEXO= Input::get('sexo');
		$empleado->EMAIL= Input::get('email');
		$empleado->CELULAR= Input::get('celular');
		$empleado->CONVENCIONAL= Input::get('convencional');
		if (Input::get('password') == '12345678-9') {
			$empleado->password= Hash::make(Input::get('ci'));
		}else{
			$empleado->password= Hash::make(Input::get('password'));
		}
		
		
			//Validaciones del Formulario 
	$Ciexist=DB::select('SELECT COUNT(COD_EMPLEADO) as valor FROM empleado WHERE CI =? AND COD_EMPLEADO= ?', array($var,$id));
					foreach ($Ciexist as $cont) {	$ced = $cont->valor; }

		if($ced ==0)
		{
			$inputs	= Input::all();
			$reglas = array(
				  'ci' => 'required|regex:/^([0-9])+$/i|size:10|unique:empleado,CI',
				  'nombres' => 'required',
				  'email' => 'required|email',
				  'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:9',
			);
		}
		else{

			$inputs	= Input::all();
			$reglas = array(
				  'ci' => 'required|regex:/^([0-9])+$/i|size:10a',
				  'nombres' => 'required',
				  'email' => 'required|email',
				  'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:9',	
			);
		}


			$mensajes = array(
					'required' => 'Campo Obligatorio',
					'size' => 'El campo debe tener la dígitos correcta,, vuelva a intentarlo',
					'email' => 'El email no tiene la sintaxis correcta, vuelva a intentarlo',
					'unique' => 'El cédula ingresada ya existe, vuelva a intentarlo',
					'regex' => 'Solo se acepta caracteres numéricos, vuelva a intentarlo',
				);	

			$validar = Validator::make($inputs,$reglas,$mensajes);
	if($validar->fails())
	{
			return Redirect::back()->withErrors($validar);
	}
	else{
		
		if($empleado->save()){
			 //guardamos la imagen en public/imgs con el nombre original
            $file->move("images/Login",$var.'.png');	

			Session::flash('message','Actualizado correctamente!');
				Session::flash('class','success');		
		}
		else{
			Session::flash('message','A ocurrido un error!');
				Session::flash('class','success');		
		}
	}
	return Redirect::to('users/editp/'.$id);
}



	public function edit($id,$esc)
	{
		//$user= DB::select('CALL ShowEmpleado('.$id.')');
		$user =  Empleado::find($id);
		$funcion= DB::select('CALL FuncionEmp('.$id.','.$esc.')');

		return View::make('users.edit',array('user'=>$user,'funcion'=>$funcion));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,$escu)
	{
		$empleado= Empleado::find($id);
		
		$var= Input::get('ci');
		$empleado->CI= Input::get('ci');
		$empleado->NOMBRES= Input::get('nombres');
		$empleado->SEXO= Input::get('sexo');
		$empleado->EMAIL= Input::get('email');
		$empleado->CELULAR= Input::get('celular');
		$empleado->CONVENCIONAL= Input::get('convencional');
		$empleado->password= Hash::make(Input::get('ci'));
		
		//Variable de tipos
		$temp1=Input::get('director');
		$temp2=Input::get('admin');
		$temp3=Input::get('trabajador');
		$temp4=Input::get('docente');

	
	//Validaciones del Formulario 
	$Ciexist=DB::select('SELECT COUNT(COD_EMPLEADO) as valor FROM empleado WHERE CI =? AND COD_EMPLEADO= ?', array($var,$id));
					foreach ($Ciexist as $cont) {	$ced = $cont->valor; }

		if($ced ==0)
		{
			$inputs	= Input::all();
			$reglas = array(
				  'ci' => 'required|regex:/^([0-9])+$/i|size:10|unique:empleado,CI',
				  'nombres' => 'required',
				  'email' => 'required|email',
				  'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:9',
			);
		}
		else{

			$inputs	= Input::all();
			$reglas = array(
				  'ci' => 'required|regex:/^([0-9])+$/i|size:10a',
				  'nombres' => 'required',
				  'email' => 'required|email',
				  'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:9',	
			);
		}

			$mensajes = array(
					'required' => 'Campo Obligatorio',
					'size' => 'El campo debe tener la dígitos correcta,, vuelva a intentarlo',
					'email' => 'El email no tiene la sintaxis correcta, vuelva a intentarlo',
					'unique' => 'El cédula ingresada ya existe, vuelva a intentarlo',
					'regex' => 'Solo se acepta caracteres numéricos, vuelva a intentarlo',
				);	

			$validar = Validator::make($inputs,$reglas,$mensajes);
	if($validar->fails())
	{
			return Redirect::back()->withErrors($validar);
	}
	else{

		if(!empty($temp1) || !empty($temp2) || !empty($temp3) || !empty($temp4))
	{
		
		if($empleado->save()){

			//Variables auxiliares del tipoEmpleado para que funcionen por el else
			$auxdi=1;
			$auxa=2;
			$auxt=3;
			$auxd=4;
		
			//Tipo = Director

			if(!empty($temp1))
			{

				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp1.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban == 0)
				{
					$directorEs= DB::select('SELECT COUNT(empe.COD_TIPO) AS valor FROM empleado_tipo AS empe WHERE empe.COD_TIPO=? AND empe.COD_ESCUELA = ?', array($temp1,$escu));
							foreach ($directorEs as $cont) {	$contador = $cont->valor; }
					if($contador ==0){		
					  DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp1,$id,$escu));
					}
					else
					{
						return Redirect::back()->with('exist', 'Ya existe un Director de Escuela registrado, Ingrese otra función al Empleado.');
					}
				}
			}
			else{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxdi.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban ==1 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxdi,$id,$escu));
				} 	
			} 

			//Tipo = Administrativo

			if(!empty($temp2))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp2.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban == 0)
				{
					  DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp2,$id,$escu));
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxa.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban ==1 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxa,$id,$escu));
				} 	
			} 

			//Tipo = Trabajador

			if(!empty($temp3))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp3.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban ==0)
				{
					 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp3,$id,$escu));
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxt.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban ==1 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxt,$id,$escu));
				} 	
			} 

			// Tipo = Docente

			if(!empty($temp4))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp4.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban ==0)
				{
					 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp4,$id,$escu));
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxd.' AND COD_ESCUELA='.$escu.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban ==1 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxd,$id,$escu));
				} 	
			} 

				Session::flash('message','Actualizado correctamente!');
				Session::flash('class','success');			
		}
		else
		{
			Session::flash('message','A ocurrido un error!');
			Session::flash('class','danger');	
		}

			return Redirect::to('users/edit/'.$id.','.$escu);
  }
		else
		{
			return Redirect::back()->with('msg', 'Tiene que asignarle almenos una función al empleado, vuelve a intentarlo.');
		}
	}
}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,$esc)
	{
		
		$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_ESCUELA='.$esc.';');
		foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
		
		if($ban != 0){

			DB::delete('DELETE FROM empleado_tipo WHERE  COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($id,$esc));
			DB::delete('DELETE FROM empleado_escuela WHERE  COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($id,$esc));
			
			Session::flash('message','Eliminado correctamente!');
			Session::flash('class','success');			
		}else{
			Session::flash('message','A ocurrido un error!');
			Session::flash('class','danger');	
		}

		$query1= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.';');
		foreach ($query1 as $cont1) 
					{	
						$ban1 = $cont1->valor; 
					}
			if($ban1 ==0)
			{
					DB::delete('DELETE FROM empleado WHERE  COD_EMPLEADO = ?', array($id));
			}

			return Redirect::to('users/empleados/'.$esc);
	}


}
