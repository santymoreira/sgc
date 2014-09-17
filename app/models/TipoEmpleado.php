<?php 
/*class TipoEmpleado extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tipo_empleado';
}*/

class TipoEmpleado extends Eloquent
{
        public $timestamps=false;
        protected $table='tipo_empleado';
        protected $primaryKey = 'COD_TIPO';

        public function empleados(){

            return $this->belongsToMany('Empleado_escuela','empleado_tipo','COD_EMPLEADO','COD_TIPO','COD_ESCUELA');
        }  
}

?>
