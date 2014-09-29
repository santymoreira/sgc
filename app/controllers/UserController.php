<?php

class UserController extends \BaseController {

	
	//Listar los usuarios del SGC.
	public function listado($escuela){

		$query=DB::select('CALL listado('.$escuela.')');
		return View::make('users.empleados')->with('users',$query); 
	}
	public function newuser()	{
		return View::make('users.create');
	}
	public function store()
	{
		$empleado = new Empleado;
		
		//Valiables table empleado
		$var=Input::get('nombres');
		
		//Tipos empleado
		$temp1=Input::get('docente');
		$temp2=Input::get('director');
		$temp3=Input::get('administrativo');
		$temp4=Input::get('trabajador');

		//Información Peronal
		$empleado->CI= Input::get('ci');
		$empleado->NOMBRES= Input::get('nombres');
		$empleado->SEXO= Input::get('sexo');
		$empleado->EMAIL= Input::get('email');
		$empleado->CELULAR= Input::get('celular');
		$empleado->CONVENCIONAL= Input::get('convencional');
		$empleado->password= Hash::make(Input::get('ci'));

//Validaciones del Formulario 
	
		$inputs	= Input::all();
		$reglas = array(

				  'ci' => 'required|regex:/^([0-9])+$/i|size:10|unique:empleado,CI',
				  'nombres' => 'required',
				  'email' => 'email',
				 'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:10',
				);

			$mensajes = array(
					'required' => 'Campo Obligatorio',
					'size' => 'El campo debe tener 10 dígitos',
					'email' => 'El email no tiene la sintaxis correcta',
					'unique' => 'El cédula ingresada ya existe',
					'regex' => 'Solo se acepta caracteres numéricos',
				);	

			$validar = Validator::make($inputs,$reglas,$mensajes);
	if($validar->fails())
	{
			return Redirect::back()->withErrors($validar);
	}
	else{

	
		if($empleado->save()){

			$query=DB::select('SELECT COD_EMPLEADO FROM empleado WHERE NOMBRES =?', array($var));
			foreach ($query as $cont) {	$aux = $cont->COD_EMPLEADO; }
			
			
			//Id del usuario.
			 $emp=Empleado::find($aux);
			
    
		   //Save in the table pivot (empleado_tipo) and (empleado_escuela)	

			 	$escuelas=Escuela::find(2); 
			    $empleado->escuelas()->save($escuelas);
			  
			    if (!empty($temp1))
			    {
			  		 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp1,$aux,2));
		
			   }
			    if (!empty($temp2))
			    {
			    	 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp2,$aux,2));
			    }
			    if (!empty($temp3))
			    {
			    	  DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp3,$aux,2));
			    }
			    if (!empty($temp4))
			    {
			    	 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp4,$aux,2));
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
}

	public function show($id)
	{
		$user= DB::select('CALL ShowEmpleado('.$id.')');
		return View::make('users.show')->with('user',$user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//$user= DB::select('CALL ShowEmpleado('.$id.')');
		$user =  Empleado::find($id);
		$funcion= DB::select('CALL FuncionEmp('.$id.')');

		return View::make('users.edit',array('user'=>$user,'funcion'=>$funcion));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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

		//Escuela a la que pertenece
		$esc=2;

	//Validaciones del Formulario 
	
		$Ciexist=DB::select('SELECT COUNT(COD_EMPLEADO) as valor FROM empleado WHERE CI =? AND COD_EMPLEADO= ?', array($var,$id));
			foreach ($Ciexist as $cont) {	$ced = $cont->valor; }

		

		if($ced ==0)
		{
			$inputs	= Input::all();
			$reglas = array(
				  'ci' => 'required|regex:/^([0-9])+$/i|size:10|unique:empleado,CI',
				  'nombres' => 'required',
				  'email' => 'email',
				  'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:10',
			);
		}
		else{

			$inputs	= Input::all();
			$reglas = array(
				  'ci' => 'required|regex:/^([0-9])+$/i|size:10a',
				  'nombres' => 'required',
				  'email' => 'email',
				  'celular' => 'regex:/^([0-9])+$/i|size:10',
				  'convencional' => 'regex:/^([0-9])+$/i|size:10',	
			);
		}

			$mensajes = array(
					'required' => 'Campo Obligatorio',
					'size' => 'El campo debe tener 10 dígitos',
					'email' => 'El email no tiene la sintaxis correcta',
					'unique' => 'El cédula ingresada ya existe',
					'regex' => 'Solo se acepta caracteres numéricos',
				);	

			$validar = Validator::make($inputs,$reglas,$mensajes);
	if($validar->fails())
	{
			return Redirect::back()->withErrors($validar);
	}
	else{

		if($empleado->save()){

			//Variables auxiliares del tipoEmpleado para que funcionen por el else
			$auxdi=1;
			$auxa=2;
			$auxt=3;
			$auxd=4;
		
			//Tipo = Director

			if(!empty($temp1))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp1.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					  DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp1,$id,2));
				}
			}
			else{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxdi.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxdi,$id,$esc));
				} 	
			} 

			//Tipo = Administrativo

			if(!empty($temp2))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp2.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					  DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp2,$id,2));
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxa.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxa,$id,$esc));
				} 	
			} 

			//Tipo = Trabajador

			if(!empty($temp3))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp3.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp3,$id,2));
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxt.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxt,$id,$esc));
				} 	
			} 

			// Tipo = Docente

			if(!empty($temp4))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp4.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					 DB::insert('insert into empleado_tipo (COD_TIPO, COD_EMPLEADO, COD_ESCUELA) values (?, ?, ?)', array($temp4,$id,2));
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxd.' AND COD_ESCUELA='.$esc.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('DELETE FROM empleado_tipo WHERE  COD_TIPO = ? AND COD_EMPLEADO = ? AND COD_ESCUELA= ?', array($auxd,$id,$esc));
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

			return Redirect::to('users/edit/'.$id);
	}
}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$escuelas=2;
		$empleado= empleado::find($id);

		//DB::delete('delete from empleado_escuela where COD_EMPLEADO = ? and COD_ESCUELA = ? ', array($id,$escuelas));
		if($empleado->escuelas()->detach($escuelas)){
			Session::flash('message','Eliminado correctamente!');
			Session::flash('class','success');			
		}else{
			Session::flash('message','A ocurrido un error!');
			Session::flash('class','danger');	
		}

			return Redirect::to('users/empleados/2');
	}


}
