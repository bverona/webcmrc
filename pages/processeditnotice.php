<?php


    $id=base64_decode($_POST['id']);

    require '../Clases/clsNotice.php';

    $objNotice = new Notice();

    echo $objNotice->GetEditNotice($id);

/*
    echo $arreglo."<br>";

    $json= "{";

    foreach($arreglo as $producto=>$valor)
    {
        $json.='"'.$producto.'" : '.$valor.',';
    }

    $json.="}";
    echo ($json);
    /*if($data=$objNotice->GetEditNotice($id))
    {
    }else
    {
       // $objNotice->GetEditNotice($id);
    }
*/
