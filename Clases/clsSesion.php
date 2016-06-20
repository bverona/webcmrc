<?php
/**
 * Created by PhpStorm.
 * User: developer01
 * Date: 6/16/2016
 * Time: 5:48 PM
 */

class Sesion {

    public  function  getSesion(){
        require_once 'clsConexion.php';

        $objCon =new Conexion();

        $sql='select item from item WHERE name="sesion"';

        $registro=$objCon->Consultar($sql)->fetch();

        return $registro['item'];

    }

    public  function getSesion2(){
        require_once 'clsConexion.php';

        $objCon = new Conexion();

        $sql='select item from item WHERE name="sesion2"';

        $registro=$objCon->Consultar($sql)->fetch();

        return $registro['item'];

    }


} 