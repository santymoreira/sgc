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
		$temp=Input::get('tipo');

		//Escuelas a las que pertence.
		$esc1=Input::get('empresas');
		$esc2=Input::get('financiera');
		$esc3=Input::get('marketing');
		$esc4=Input::get('exterior');
		$esc5=Input::get('transporte');
		$esc6=Input::get('contabilidad');
		$esc7=Input::get('distancia');

		//Información Peronal
		$empleado->CI= Input::get('ci');
		$empleado->NOMBRES= Input::get('nombres');
		$empleado->SEXO= Input::get('sexo');
		$empleado->EMAIL= Input::get('email');
		$empleado->CELULAR= Input::get('celular');
		$empleado->CONVENCIONAL= Input::get('convencional');
		$empleado->password= Hash::make(Input::get('ci'));

		//Validaciones.

			//Datos a validar
		/*	$ced=Input::get('ci');
			$name=Input::get('nombres');
			$sex=Input::get('sexo');
			$mail= Input::get('email');
			$phone=Input::get('celular');
			$movil= Input::get('convencional');
			

			$validar=Validator::make($nuevoEmpleado,$reglas,$mensajes); */
			


		if($empleado->save()){

			$query=DB::select('SELECT COD_EMPLEADO FROM empleado WHERE NOMBRES =?', array($var));
			foreach ($query as $cont) {	$aux = $cont->COD_EMPLEADO; }
			
			//Store in the table Pivot
			 $empleado=Empleado::find($aux);
		     $tipos=TipoEmpleado::find($temp); 


		    //Save in the table pivot (empleado_tipo) y (empleado_escuela)	
		    if ($empleado->tipos()->save($tipos)) {
		    
				if (!empty($esc1)) {
					  $escuelas=Escuela::find($esc1); 
					  $empleado->escuelas()->save($escuelas);
				}		    
		    	if (!empty($esc6)) {
					  $escuelas1=Escuela::find($esc6); 
					  $empleado->escuelas()->save($escuelas1);
				}
					Session::flash('message','Guardado correctamente!');
					Session::flash('class','success');
		    }	
		}
		else{
				Session::flash('message','A ocurrido un error!');
				Session::flash('class','danger');	
			}
		return Redirect::to('users/create');
	}

	public function show($id)
	{
		$user= empleado::find($id);
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
		$user= DB::select('CALL ShowEmpleado('.$id.')');
		return View::make('users.edit')->with('user',$user);
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
		
		$empleado->CI= Input::get('ci');
		$empleado->NOMBRES= Input::get('nombres');
		$empleado->SEXO= Input::get('sexo');
		$empleado->EMAIL= Input::get('email');
		$empleado->CELULAR= Input::get('celular');
		$empleado->CONVENCIONAL= Input::get('convencional');
		$empleado->password= Hash::make(Input::get('ci'));
		
		//Variable de tipos
		$tipo=Input::get('tipos');
		$lastype=Input::get('lastype');
		
		if($empleado->save()){

			//$tipos=TipoEmpleado::find($tipo); 
			//$empleado->tipos()->save($tipos);
			DB::update('update empleado_tipo set COD_TIPO = ?, COD_EMPLEADO = ? where COD_TIPO = ? and COD_EMPLEADO= ?', array($tipo, $id, $lastype, $id)); 

		
			Session::flash('message','Actualizado correctamente!');
			Session::flash('class','success');			
		}else{
			Session::flash('message','A ocurrido un error!');
			Session::flash('class','danger');	
		}

			return Redirect::to('users/edit/'.$id);
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			
		
		
		$empleado= empleado::find($id);

		
		if($empleado->delete()){
			Session::flash('message','Eliminado correctamente!');
			Session::flash('class','success');			
		}else{
			Session::flash('message','A ocurrido un error!');
			Session::flash('class','danger');	
		}

			return Redirect::to('users/empleados/2');
	}


}
