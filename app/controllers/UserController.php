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

	
		if($empleado->save()){

			$query=DB::select('SELECT COD_EMPLEADO FROM empleado WHERE NOMBRES =?', array($var));
			foreach ($query as $cont) {	$aux = $cont->COD_EMPLEADO; }
			
			//Id del usuario.
			 $empleado=Empleado::find($aux);


		    
		   //Save in the table pivot (empleado_tipo) and (empleado_escuela)	

			 	$escuelas=Escuela::find(2); 
			    $empleado->escuelas()->save($escuelas);
			  
			    if (!empty($temp1))
			    {
			    	 $tipos1=TipoEmpleado::find($temp1); 
			    	 $empleado->tipos()->save($tipos1);
			   }
			    if (!empty($temp2))
			    {
			    	 $tipos2=TipoEmpleado::find($temp2); 
			    	 $empleado->tipos()->save($tipos2);
			    }
			    if (!empty($temp3))
			    {
			    	 $tipos3=TipoEmpleado::find($temp3); 
			    	 $empleado->tipos()->save($tipos3);
			    }
			    if (!empty($temp4))
			    {
			    	 $tipos4=TipoEmpleado::find($temp4); 
			    	 $empleado->tipos()->save($tipos4);
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
