<?php 
/*class TipoEmpleado extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tipo_empleado';
}*/

class Empleado_escuela extends Eloquent
{
        public $timestamps=false;
        protected $table='empleado_escuela';
      //  protected $primaryKey = 'COD_TIPO';

        public function tipoescuelas(){

            return $this->belongsToMany('TipoEmpleado','empleado_tipo','COD_EMPLEADO','COD_TIPO','COD_ESCUELA');
        }  
}

?>
