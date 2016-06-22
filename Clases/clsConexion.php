<?php
  class Conexion {
    
    public function Conecta() {
    
       $host="mysql:host=localhost;port=3306;dbname=db_news";
       $usuario="root";
       $clave="";
       //$host="mysql:host=mysql.cmramoncastilla.edu.pe;port=3306;dbname=dbcmramoncastilla";
       //$usuario="u_cmramon";
       //$clave="XXXPorNo2035";
       $dblink=new PDO($host, $usuario, $clave);
       $dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
       return $dblink;
    }
    
    public function Consultar($sql) {
        $resultado=0;//si devuelve 0, operación errónea
        try {
            $conexion= $this->Conecta();
            $resultado=$conexion->query($sql);
            } 
            catch (Exception $exc) {
            $resultado=0;
            echo $exc->getMessage();
            exit();
            }
         return $resultado;   
        }
                    
}
?>