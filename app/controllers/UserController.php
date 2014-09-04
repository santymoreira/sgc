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
		
		$empleado->CI= Input::get('ci');
		$empleado->NOMBRES= Input::get('nombres');
		$empleado->SEXO= Input::get('sexo');
		$empleado->EMAIL= Input::get('email');
		$empleado->CELULAR= Input::get('celular');
		$empleado->CONVENCIONAL= Input::get('convencional');
		$empleado->password= Hash::make(Input::get('ci'));
		
		//Variable de tipos
		$temp1=Input::get('director');
		$temp2=Input::get('administrativo');
		$temp3=Input::get('trabajador');
		$temp4=Input::get('docente');

		if($empleado->save()){

			//Variables auxiliares del tipoEmpleado para que funcionen por el else
			$auxdi=1;
			$auxa=2;
			$auxt=3;
			$auxd=4;
		
			//Tipo = Director

			if(!empty($temp1))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp1.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					 $tipos1=TipoEmpleado::find($temp1); 
			    	 $empleado->tipos()->save($tipos1);	
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxdi.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('delete from empleado_tipo where COD_EMPLEADO = ? and COD_TIPO = ? ', array($id,$auxdi));
				} 	
			} 

			//Tipo = Administrativo

			if(!empty($temp2))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp2.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					 $tipos2=TipoEmpleado::find($temp2); 
			    	 $empleado->tipos()->save($tipos2);	
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxa.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('delete from empleado_tipo where COD_EMPLEADO = ? and COD_TIPO = ? ', array($id,$auxa));
				} 	
			} 

			//Tipo = Trabajador

			if(!empty($temp3))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp3.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					 $tipos3=TipoEmpleado::find($temp3); 
			    	 $empleado->tipos()->save($tipos3);	
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxt.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('delete from empleado_tipo where COD_EMPLEADO = ? and COD_TIPO = ? ', array($id,$auxt));
				} 	
			} 

			// Tipo = Docente

			if(!empty($temp4))
			{
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$temp4.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban != 1)
				{
					 $tipos4=TipoEmpleado::find($temp4); 
			    	 $empleado->tipos()->save($tipos4);	
				}
			}
			else{
					
				$query= DB::select('SELECT COUNT(COD_EMPLEADO) AS valor FROM empleado_tipo WHERE COD_EMPLEADO='.$id.' AND COD_TIPO='.$auxd.';');

					foreach ($query as $cont) 
					{	
						$ban = $cont->valor; 
					}
				
				if($ban !=0 ) 
				{
					DB::delete('delete from empleado_tipo where COD_EMPLEADO = ? and COD_TIPO = ? ', array($id,$auxd));
						Session::flash('message','Actualizado correctamente!');
						Session::flash('class','success');	
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
