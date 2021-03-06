<?php
session_start();
if(empty($_SESSION['login']))
{
    header('Location: login.php');
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


<!-- Styles -->
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/revolution.css" media="screen" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="../css/myStyle.css" type="text/css" />
<link href="../css/responsive.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="../css/color/color.css" title="color" />

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="../css/revolution/settings.css">
<link rel="stylesheet" type="text/css" href="../css/revolution/layers.css">
<link rel="stylesheet" type="text/css" href="../css/revolution/navigation.css">

</head>
<body>
<div class="theme-layout">
<header>
	    <?php
            include "../navbar.php";
        ?>
</header>
<!-- Header -->


<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
                <form enctype="multipart/form-data" id="procesa" method="post">
                    <div class="col-xs-4 ">
                        <div class="col-xs-3">
                            <label class="title">Título</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>
                    </div>
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
                    <div class="col-xs-12 ">
                        <label class="title">Cuerpo
                            <textarea name="body" class="form-control" rows="20" id="texto"></textarea>
                        </label>
                    </div>
                    <div class="col-sm-2-offset col-xs-4 col-sm-3 col-lg-2">
                        <div class="form-group">
                            <input type="button" class="btn btn-block" value="Registrar" id="btnsend" data-toggle="modal" data-target=".bs-example-modal-sm"/>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
</section>



    <div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" >
               <p id="textoModal"></p>
            </div>
        </div>
    </div>
    </div>


<div class="bottom-footer">
	<div class="container">
		<p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>

	</div>
</div>


</div>




<!-- MAIN JQUERY AND MODERANIZER.JS -->
<script type="text/javascript" src="../js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="../js/jquery2.1.4.js"></script>


<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="../js/revolution/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="../js/revolution/jquery.themepunch.revolution.min.js"></script>

<!-- REVOLUTION JS EXTENITONS FILES -->
<script type="text/javascript" src="../js/revolution/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.video.min.js"></script>

<!-- REVOLUTION JS INITIALIZATION -->
<script type="text/javascript" src="../js/revolution/initialize.js"></script>

<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../js/jquery.poptrox.min.js"></script>
<script type="text/javascript" src="../js/jquery.scrolly.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/isotope-initialize.js"></script>
<script src="../js/enscroll-0.5.2.min.js"></script> <!-- Custom Scroll bar -->
<script type="text/javascript" src="../js/script.js"></script>

<script type="text/javascript">


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
        //formData.append("dato", "valor");
        //formData.append(f.attr("imgp"), $(this)[0].files[0]);
        //formData.append(f.attr("imgg"), $(this)[0].files[0]);



            $.ajax({
                url: "procesa.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
                .done(function (res) {
                    $('#titulo').val('');
                    $('#imgp').val('');
                    $('#imgg').val('');
                    $('#texto').val('');

                });




    });





});
</script>

</body>
