<?php 


class Escuela extends Eloquent
{
        public $timestamps=false;
        protected $table='escuela';
        protected $primaryKey = 'COD_ESCUELA';

        public function empleadosEsc(){

            return $this->belongsToMany('Empleado','empleado_escuela','COD_EMPLEADO','COD_ESCUELA');
        }  
}

?>
