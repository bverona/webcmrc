<?php


    $id=base64_decode($_POST['id']);

    require '../Clases/clsNotice.php';

    $objNotice = new Notice();

    //echo "----> ".$_POST['id'];

    if($data=$objNotice->GetEditNotice($id))
    {
        echo json_encode($data) ;
    }else
    {
        $objNotice->GetNotice($id);
    }
