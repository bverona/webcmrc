<?php


    $id=base64_decode($_POST['id']);

    require '../Clases/clsNotice.php';

    $objNotice = new Notice();

    $objNotice->GetEditNotice($id);

    //echo ($data) ;

    /*if($data=$objNotice->GetEditNotice($id))
    {

    }else
    {
       // $objNotice->GetEditNotice($id);
    }
*/
?>