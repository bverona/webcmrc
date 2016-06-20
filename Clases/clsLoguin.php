<?php
/**
 * Created by PhpStorm.
 * User: developer01
 * Date: 6/15/2016
 * Time: 11:57 AM
 */

class clsLoguin {

    public function Logueo($user,$pass){

        require 'clsConexion.php';

        $objCon= new Conexion();

        $sql="select pass from managers where login='". $user."'";

        $reg=$objCon->Consultar($sql)->fetch();

        if ($reg["pass"]==$pass)
        {
           return true;
        }
        else
        {
            return false;
        }

    }


} 