<?php

    if (!empty($_POST['id']))
    {
        require '../Clases/clsNotice.php';

        $objNotice = new Notice();

        if($data=$objNotice->ListNoticeTable())
        {
            echo $data;
        }

    }else
        {
            echo "Error";
        }
