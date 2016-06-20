<?php

    $id=$_POST['id'];

    require '../Clases/clsNotice.php';

    $objNotice = new Notice();

    if($data=$objNotice->GetNotice($id))
    {
        echo $data;
    }else
    {
        $objNotice->GetNotice($id);
    }
