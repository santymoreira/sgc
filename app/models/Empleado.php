<?php 
// se debe indicar en donde esta la interfaz a implementar
use Illuminate\Auth\UserInterface;

 
Class Empleado extends Eloquent implements UserInterface{

     //public static $timestamps = false;
    public $timestamps = false;
    protected $table = 'empleado';
    protected $primaryKey = 'COD_EMPLEADO';
    protected $fillable = array('COD_EMPLEADO','CI','NOMBRES','SEXO','EMAIL','CELULAR','CONVENCIONAL','password');
 
   public static function storedProcedureCall($sql) {
         return DB::select($sql);
    } 

    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function tipos_empleado(){
        return $this->belongsToMany('TipoEmpleado', 'empleado_tipo', 'COD_EMPLEADO', 'COD_TIPO');
    }

public function getRememberToken() {
return $this->remember_token;
}

public function setRememberToken($value) {
  $this->remember_token = $value;
}

public function getRememberTokenName()
{
 return 'remember_token';
}
    
}
?>