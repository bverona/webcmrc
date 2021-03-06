<?php
session_start();
if(empty($_SESSION['login']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Colegio Militar Ramón Castilla|| Piura Perú</title>
<link rel="icon" href="../images/icon_ramoncastilla.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

    <link href="../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/metisMenu.css" type="text/css"/>
    <link rel="stylesheet" href="../css/sb-admin-2.css" type="text/css"/>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css"/>

</head>
<body>
<div>
<header>

	    <?php
        include "../nvbcmrc.php";
        ?>

</header>
<!-- Header -->

<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <form enctype="multipart/form-data" id="procesa" method="post">
                <div class="row">
                    <div class="col-xs-12 ">
                        <p class="text-center">
                        <div class="col-xs-1">
                            <label class="title">Título</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" name="titulo" id="titulo"  class="form-control">
                        </div>
                        </p>
                    </div>
                    <div class="col-xs-12 ">
                        <h4><label class="title">Cuerpo</label></h4>
                            <textarea name="body" class="form-control"   rows="15" id="texto"></textarea>
                    </div>
                </div>

                <div class="row"><br/>
                    <div class="col-xs-4 ">
                        <div class="col-xs-3">
                            <label class="title">Imagen Pequeña</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="file" name="imgp" id="imgp" accept="image/jpeg, image/png">
                        </div>
                    </div>
                    <div class="col-xs-4 ">
                        <div class="col-xs-3">
                            <label class="title">Imagen Grande</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="file" name="imgg" id="imgg" accept="image/jpeg, image/png">
                        </div>
                    </div>
                    <div class="col-sm-2-offset col-xs-4 col-sm-3 col-lg-2">
                        <div class="form-group">
                            <a data-toggle="modal" href="#Editar" id="btnsend" onclick="Enviar()" class="btn btn-success">Enviar</a>
                        </div>
                    </div>
                </div>

                <div class="row"><br/>
                    <div class="col-xs-4 ">
                        <div class="col-xs-12">
                            <img src="#" id="imagenp" name="imagenp"  alt="Imagen Pequeña" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-xs-4 ">
                        <div class="col-xs-12">
                            <img src="#" id="imageng" id="imageng" class="img-responsive" alt="Imagen Grande"/>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

    <div class="modal fade" tabindex="-1" role="dialog" id="Editar" style="margin-top: 10%; display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Editar</h4>
                </div>
                <div class="modal-body">
                    <h4 id="mensaje">Enviando...</h4>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-info" >Salir</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

</div>


<div class="bottom-footer">
	<div class="container">
		<p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>
	</div>
</div>

<script type="text/javascript" src="../bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="../js/metisMenu.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/sb-admin-2.js"></script>
<script type="text/javascript" src="../js/Base64.js"></script>
<script type="text/javascript" src="../js/dataTables.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        getNotice("<?php echo ($_GET["id"]);?>");

    });

    function getNotice(id){
        var dataString = 'id='+id;
        $.ajax({
            type: "POST",
            url: "processeditnotice.php",
            data: dataString,
            success:function(data){
                var obj=data.split(",");
                /*
                 var str="";
                 for (var p in obj) {
                 if (obj.hasOwnProperty(p)) {
                 str += p + '::' + obj[p] + '\n';
                 }
                 };
                 */
                $("#titulo").val(obj[0]);
                $("#imagenp").attr("src",obj[1]);
                $("#imageng").attr("src",obj[2])
                for (i=3 ;i<=obj.length;i++) {
                    $("#texto").append(obj[i]);
                }
                //$("#texto").html(obj[3]);
            }
        });
    }
    function isImage(extension)
    {
        switch(extension.toLowerCase())
        {
            case 'jpg': case 'gif': case 'png': case 'jpeg':
            return true;
            break;
            default:
                return false;
                break;
        }
    }
    function Mostrarp(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#imagenp").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function Mostrarg(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#imageng").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#imgp').change(function()
    {
        var fileExtension = "";

        //obtenemos un array con los datos del archivo
        var file = $("#imgp")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;



        if(!isImage(fileExtension)){
            alert('Solo debe Seleccionar imágenes');
            $("#imgp").val('');
        }else{

            Mostrarp(this);
        }
    });

    $('#imgg').change(function()
    {


        //obtenemos un array con los datos del archivo
        var file = $("#imgg")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;

        if(!isImage(fileExtension)){
            alert('Solo debe Seleccionar imágenes');
            $("#imgg").val('');
        }else{

            Mostrarg(this);

        }
    });

    function Enviar(){
        var formData = new FormData(document.getElementById("procesa"));
        formData.append("id","<?php echo ($_GET["id"]);?>" );
        $.ajax({
            url: "procesaeditarnoticia.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function (res) {
            $("#mensaje").val("Enviado!");
            setTimeout(function(){location.href="Gestionar.php";},2000);
        });
    }

    $("#btnenviar").on("click", function(e){
            e.preventDefault();

    });

</script>

</body>
