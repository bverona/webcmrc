<?php
/**
 * Created by PhpStorm.
 * User: developer01
 * Date: 6/14/2016
 * Time: 5:37 PM
 */

class Notice {

    public function Add($title,$imgp,$imgg,$body){

        require_once "clsConexion.php";
        $objCon =new Conexion();

        $sql="INSERT INTO news (titulo, small_photo, big_photo, content)VALUES ('".$title."' ,'".$imgp."','".$imgg."','".$body."')";


        $reg=$objCon->Consultar($sql);

        if($reg!=null)
        {
            return true;
        }else
        {
            return false;
        }

    }

    public function Edite($id,$title,$imgp,$imgg,$body){

        require_once "clsConexion.php";
        $objCon =new Conexion();

        $sql="update news set titulo='".$title."'".",small_photo='".$imgp."'".",big_photo='".$imgg."'".",content='".$body."' where id=".$id;

        echo $sql;

        $reg=$objCon->Consultar($sql);

        if($reg!=null)
        {
            return true;
        }else
        {
            return false;
        }

    }

    public function Delete($id){

        require_once "clsConexion.php";
        $objCon =new Conexion();

        $sql="update news set  state=2 where id=".$id;
        echo $sql;
        $reg=$objCon->Consultar($sql);

        if($reg!=null)
        {
            return true;
        }else
        {
            return false;
        }

    }

    public function GetNotice($id){

        require_once "clsConexion.php";

        $objCon =new Conexion();

        $sql="select titulo, big_photo, content,DATE_FORMAT(CREATED,'%d')as dia,DATE_FORMAT(CREATED,'%M') as mes from news where id=".$id." and state=1";


        $resul=$objCon->Consultar($sql);

        if($reg=$resul->fetch())
        {
            return '<section >
                    <div class="block gray">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog-detail">
                                        <div class="detail-img">
                                            <img  src="../images/'.$reg["big_photo"].'" class="img-responsive" />
                                            <div class="blog-author"><img src="http://placehold.it/52x52" alt="" /></div>
                                        </div>
                                        <div class="blog-detail-desc">
                                            <div class="blog-date">'.$reg["dia"].' <span>'.$reg["mes"].'</span></div>
                                            <div class="blog-text">
                                                <h2 class="blog-title">'.$reg["titulo"].'</h2>
                                                <p style="text-align: justify; font-size: 16px;">
                                                '.$reg["content"].'
                                                </p>
                                            </div>
                                        </div><!-- Blog Detail Description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>'  ;
        }
    }

    public function ListNotice(){

        require_once "clsConexion.php";
        $objCon =new Conexion();

        $sql="select id,titulo,small_photo,big_photo, content,DATE_FORMAT(CREATED,'%d')as dia,DATE_FORMAT(CREATED,'%M') as mes,DATE_FORMAT(CREATED,'%Y') as anho from news WHERE state=1 order by 6 asc";

        $resul=$objCon->Consultar($sql);

        $nbsp="&nbsp;";
        while($reg=$resul->fetch())
        {
            $titulo=$reg["titulo"];

            if(strlen($titulo)>=60){
                $titulo = substr($reg["titulo"],0,56)."...";
            }elseif(strlen($titulo)<=30){
                for ($i=1;$i<(23-strlen($titulo)) ;$i++){
                    $nbsp.=$nbsp;
                }
                $titulo.=$nbsp." ";
            }

            echo '
                    <div class="col-md-4">
                        <div class="grid-post">
                            <div class="post-img">
                                <img src="../images/'.$reg["small_photo"].'" class="img-responsive" >
                                <div class="date" style="background-color: #558b2f"><strong>'.$reg["dia"].' </strong>'.$reg["mes"].', '.$reg["anho"].'</div>
                            </div>
                            <div class="post-detail">
                                <div class="author-img"><img src="https://placeholdit.imgix.net/~text?txtsize=11&txt=Noticias&w=65&h=58" alt=""></div>
                                <h5><a href="#" onclick="getNotice('.$reg["id"].')" title=""><b> '.$titulo.'</b></a></h5>
                            </div>
                        </div>
                        <!-- Grid Post -->
                    </div>';
        }
    }

    public function ListNoticeTable(){

        require_once "clsConexion.php";
        $objCon =new Conexion();

        $contador=0;

        $sql="select id,titulo,small_photo,big_photo, content,DATE(created) as fecha,state as estado,
            case
              when state=1 then 'Activo'
              when state=0 then 'Inactivo'
            end  as dato
            from news where state<>2 order by 6 desc ";

        $resul=$objCon->Consultar($sql);

        while($reg=$resul->fetch())
        {
            $aux="";

           if($reg["estado"]==1){
               $aux=" btn-info";
           }else{
               $aux=" btn-danger";
           }

            $contador++;
            echo '
                    <tr>
                        <td  class="text-center">
                            <p class="text-center">
                            '.$contador.'
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="text-left">
                            '.$reg["titulo"].'
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="text-center">
                            '.$reg["fecha"].'
                            </p>
                        </td>
                        <td >
                            <p class="text-center">
                                <button onclick="ChangeState('.$reg["id"].','.$reg["estado"].')" class="btn '.$aux.' ">'.$reg["dato"].'</button>
                            </p>
                        </td>
                        <td >
                            <p class="text-center">
                                <button onclick="Editar('.$reg["id"].')" class="btn btn-default" style="color: #080808">Editar</button>
                            </p>
                        </td>
                        <td >
                            <p class="text-center">
                            <a data-toggle="modal" href="#eliminar" onclick="Set('.$reg["id"].')" class="btn btn-danger">Eliminar</a>
                            </p>
                        </td>
                    </tr>
                ';
        }/*  <button onclick="Set('.$reg["id"].')" class="btn btn-danger" style="color: #080808">Eliminar</button>*/
    }

    public function ChangeStateNotice($id,$state)
    {
        require_once "clsConexion.php";
        $objCon = new Conexion();

        $state<>1?$state=1:$state=0;

        $sql="update news set state=".$state." where id=".$id;

        $resul=$objCon->Consultar($sql);

        if($resul!=null)
        {
            return true;
        }
    }

    public function GetEditNotice($id){

        require_once "clsConexion.php";

        $objCon =new Conexion();

        $sql="select titulo,small_photo, big_photo, content,DATE_FORMAT(CREATED,'%d')as dia,DATE_FORMAT(CREATED,'%M') as mes from news where id=".$id;

        $resul=$objCon->Consultar($sql);

        if($reg=$resul->fetch())
        {
            $retorno=array(
                "titulo"=>$reg["titulo"],
                "small_photo"=>$reg["small_photo"],
                "big_photo"=>$reg["big_photo"],
                "content"=>$reg["content"],
            );
        }

        echo  json_encode($retorno);
    }

}
