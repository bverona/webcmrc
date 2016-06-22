<?php
session_start();
$id = base64_decode($_GET["id"]);
if(empty($_SESSION['login']) )
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


    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/metisMenu.css" type="text/css"/>
    <link rel="stylesheet" href="../css/sb-admin-2.css" type="text/css"/>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css"/>

</head>
<body>
<div class="theme-layout">
<header>

    <?php
        require_once '../Clases/clsNavBar.php';
        $objNav = new NavBar();
        echo $objNav->getNavbar2();
    ?>

</header>
<!-- Header -->

<div id="wrapper">
	<div>
		<div id="page-wrapper">

            <form enctype="multipart/form-data" id="procesa" method="post">
                <div class="row">
                    <div class="col-xs-12 ">
                        <p class="text-center">
                            <div class="col-xs-1">
                                <label class="title">Título</label>
                            </div>
                            <div class="col-xs-11">
                                <input type="text" name="titulo" id="titulo" class="form-control">
                            </div>
                        </p>
                    </div>
                    <div class="col-xs-12 ">
                        <h4><label class="title">Cuerpo
                        <textarea name="body" class="form-control" rows="15" id="texto"></textarea></label></h4>
                    </div>
                </div>

                <div class="row"><br/>
                        <div class="col-xs-4 ">
                            <div class="col-xs-3">
                                <label class="title">Imagen Pequeña</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="file" name="imgp" id="imgp">
                            </div>
                        </div>
                        <div class="col-xs-4 ">
                            <div class="col-xs-3">
                                <label class="title">Imagen Grande</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="file" name="imgg" id="imgg">
                            </div>
                        </div>
                        <div class="col-sm-2-offset col-xs-4 col-sm-3 col-lg-2">
                        <div class="form-group">
                            <a data-toggle="modal" href="#Registar" id="btnregistrar" class="btn btn-danger">Registrar</a>
                        </div>
                    </div>
                    </div>

            </form>

		</div>
	</div>
</section>

    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Registar">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="Registar" style="margin-top: 10%; display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Registrar</h4>
                </div>
                <div class="modal-body">
                    <h4 id="mensaje"></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-info" onclick="Limpiar()">Salir</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


<div class="bottom-footer">
	<div class="container">
		<p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>

	</div>
</div>


</div>


<script type="text/javascript" src="../js/jquery2.1.4.js"></script>
<script type="text/javascript" src="../js/metisMenu.js"></script>
<script type="text/javascript" src="../js/sb-admin-2.js"></script>

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
                $("#texto").html(obj[3]);
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
$(':file').change(function()
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
    }

    //obtenemos un array con los datos del archivo
    var file = $("#imgg")[0].files[0];
    //obtenemos el nombre del archivo
    var fileName = file.name;
    //obtenemos la extensión del archivo
    fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
    var fileType = file.type;
    //mensaje con la información del archivo

    if(!isImage(fileExtension)){
        alert('Solo debe Seleccionar imágenes');
        $("#imgg").val('');
    }

});

$(function(){

    $("#btnsend").on("click", function(e){
        e.preventDefault();
        var f = $(this);
        var formData = new FormData(document.getElementById("procesa"));
        formData.append("id","<?php echo ($_GET["id"]);?>" );
        //formData.append(f.attr("imgp"), $(this)[0].files[0]);
        //formData.append(f.attr("imgg"), $(this)[0].files[0]);

/*
        if($("#titulo").val()===""){
            $("#mensaje").html("Ingrese título");
            $("#titulo").focus();
        }else if (typeof($("#contenido").html())==="undefined"){
            $("#mensaje").html("Ingrese contenido de noticia");
        }else if (typeof(filep)==="undefined"){
            $("#mensaje").html("Seleccione la Imagen Pequeña");
            $("#imgp").focus();
        }else if(typeof(fileg)==="undefined")
        {
            $("#mensaje").html("Seleccione la Imagen Grande");
            $("#imgg").focus();
        }else
        {


        }*/

        $.ajax({
            url: "procesaeditarnoticia.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        })
            .done(function (res) {

                setTimeout(function(){
                    location.href="Gestionar.php";
                },2000);

            });






    });





});
</script>

</body>
