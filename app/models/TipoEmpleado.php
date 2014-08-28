<?php 
/*class TipoEmpleado extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tipo_empleado';
}*/

class TipoEmpleado extends Eloquent
{
    /**
     * Set timestamps off
     */
    public $timestamps = false;
    protected $table = 'tipo_empleado';
 
    /**
     * Get users with a certain role
     */
    public function empleados(){
        return $this->belongsToMany('Empleado', 'empleado_tipo', 'COD_TIPO', 'COD_EMPLEADO');
    }
}

?>
