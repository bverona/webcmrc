<!DOCTYPE html>
<?php

session_start();
$_SESSION['login']='';
session_destroy();

?>
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
    require_once '../Clases/clsNavBar.php';
    $objNav = new NavBar();
    echo $objNav->getNavbar();
    ?>

</header><!-- Header -->

<!--<section>-->
	<!--<div class="block no-padding">
		<div class="">
			<div class="row">
				<div class="col-md-12">
					<div id="rev_slider_116_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="layer-animations" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">-->
					<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
						<!--<div id="rev_slider_116_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
							<ul>	
								<li data-index="rs-396" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 1" data-description="">-->
									<!-- MAIN IMAGE -->
									<!--<img src="images/slider1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>-->
									<!-- LAYER NR. 1 -->
									<!--<div class="tp-caption layer1 tp-resizeme" 
										id="slide1-layer1" 
										data-x="700" data-hoffset="" 
										data-y="106" data-voffset="-150" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;"
										data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-start="1000" 
										data-splitin="chars" 
										data-splitout="none" 
										data-responsive_offset="on" 
										data-elementdelay="0.05" 
										style="font-size:16px; letter-spacing:0.6px;">We Are Done Excellent Job
									</div>-->
									<!-- LAYER NR. 2 -->
									<!--<div class="tp-caption layer2 tp-resizeme" 
										id="slide1-layer2" 
										data-x="700" data-hoffset="" 
										data-y="140" data-voffset="" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;tO:0% 50%;"
										data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
										data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
										data-start="2000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										data-elementdelay="0.05" 
										style="font-size:50px;letter-spacing:1px;line-height:70px;">GET <span>LEGAL</span> HELP <br/> <strong>IMMEDIATELY</strong>
									</div>-->
									<!-- LAYER NR. 3 -->
									<!--<div class="tp-caption layer3 tp-resizeme" 
										id="slide1-layer3" 
										data-x="700" data-hoffset="" 
										data-y="300" data-voffset="" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;"
										data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-start="3000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="font-size:15px; letter-spacing:0.3px; line-height:32px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, <br/>sed, nec esta tibusea nemo hic molestias amet tempora fuga .
									</div>-->
									<!-- LAYER NR. 4 -->
									<!--<a href="#" class="tp-caption layer4 tp-resizeme rs-parallaxlevel-9" 
										id="slide1-layer4" 
										data-x="700" data-hoffset="" 
										data-y="410" data-voffset="" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;"
										data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-start="3300" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="font-size:13px; padding:20px 40px; letter-spacing:0.4px;">NEED LEGAL ASSISTANCE
									</a>
								</li>-->
								<!--<li data-index="slide1" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide 2" data-description="">
									<img src="images/slider2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />-->
									<!-- LAYER NR. 1 -->
									<!--<div class="tp-caption layer1 tp-resizeme" 
										id="slide2-layer1" 
										data-x="center" data-hoffset="" 
										data-y="106" data-voffset="-150" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;"
										data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-start="1000" 
										data-splitin="chars" 
										data-splitout="none" 
										data-responsive_offset="on" 
										data-elementdelay="0.05" 
										style="font-size:16px; letter-spacing:0.6px;">We Are Here To Help You
									</div>-->
									<!-- LAYER NR. 2 -->
									<!--<div class="tp-caption layer2 tp-resizeme" 
										id="slide2-layer2" 
										data-x="center" data-hoffset="" 
										data-y="140" data-voffset="" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;tO:0% 50%;"
										data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
										data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
										data-start="2000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										data-elementdelay="0.05" 
										style="font-weight:700; font-size:50px;letter-spacing:1px;line-height:70px;"><span>INVESTIGATE</span> POWER
									</div>-->
									<!-- LAYER NR. 3 -->
									<!--<div class="tp-caption layer2 tp-resizeme" 
										id="slide2-layer3" 
										data-x="center" data-hoffset="" 
										data-y="200" data-voffset="" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;tO:0% 50%;"
										data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
										data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
										data-start="2000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										data-elementdelay="0.05" 
										style="font-weight:700; font-size:50px;letter-spacing:1px;line-height:70px;">OF YOUR VOICE
									</div>-->
									<!-- LAYER NR. 4 -->
									<!--<div class="tp-caption layer3 tp-resizeme" 
										id="slide2-layer4" 
										data-x="center" data-hoffset="" 
										data-y="280" data-voffset="" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;"
										data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-start="3000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="text-align:center; font-size:15px; letter-spacing:0.3px; line-height:32px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus,<br/> sed, nec esta tibusea nemo hic molestias amet tempora fuga .
									</div>-->
									<!-- LAYER NR. 4 -->
									<!--<a href="#" class="tp-caption layer4 tp-resizeme rs-parallaxlevel-9" 
										id="slide2-layer5" 
										data-x="center" data-hoffset="" 
										data-y="410" data-voffset="" 
										data-width="['auto','auto','auto','auto']"
										data-height="['auto','auto','auto','auto']"
										data-transform_idle="o:1;"
										data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-start="3300" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="font-size:13px; padding:20px 40px; letter-spacing:0.4px;">NEED LEGAL ASSISTANCE
									</a>
								</li>-->
								<!-- SLIDE  -->
							<!--</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
<!--</section>-->

<!--<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="welcome-area">
						<div class="row">
					 		<div class="col-md-6">
					 			<div class="welcome-text">
					 				<h3>Bienvenidos</h3>
					 				<p>La prestigiosa Institución Educativa Pública Militar “Gran Mariscal Ramón Castilla” de la ciudad de Trujillo- Perú les da la más cordial bienvenida a su portal web. Esperando que la información que se detalla sea de utilidad para usted.
									Durante 51 años el Colegio Militar “Gran Mariscal Ramón Castilla” viene forjando futuros ciudadanos y profesionales de éxito.
									En su calidad de Colegio Militar, imparte una formación integral que fusiona la instrucción académica de nivel secundario, con la de carácter castrense que inculca orden, disciplina y responsabilidad; orientada siempre hacia la práctica de los valores morales y sociales.
									Actualmente esta Institución Educativa esta orientada a ofrecer a la juventud un servicio de renovada calidad, que garantiza alcanzar los ideales de superación que animan a sus estudiantes y justifica plenamente la confianza que en ella depositan los padres de familia, y ello nos compromete a entregar lo mejor de nuestra experiencia personal y profesional para el logro de los objetivos institucionales y el cumplimiento de nuestro sagrado lema: DISCIPLINA, MORALIDAD Y TRABAJO.</p>
					 				<a href="#" title="">JOSE MARTIN YALE AVILA - DIRECTOR I.E.P.M. “GRAN MARISCAL RAMON CASTILLA”</a>
					 			</div>
					 		</div>
					 		<div class="col-md-6">
					 			<div class="welcome-img">
					 				<img src="images/welcome.jpg" alt="" />
					 				<img src="images/director.jpg" alt="" />
					 			</div>
					 		</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<!--<section class="section_matricula">
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="service-sec style2">
						<div class="title_service">
							<h1>Matrículas 2016</h1>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="service">
									<span><i class="fa fa-pencil-square-o"></i></span>
									<h4><a title="" href="#">TERCER AÑO</a></h4>
									<p>CUOTA DE INCORPORACIÓN S/. 2.300,00</p>
									<p>PENSION ALIMENTICIA MARZO S/. 280,00</p>
									<h4><a title="" href="#">S/. 2.580,00</a></h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service">
									<span><i class="fa fa-pencil-square-o"></i></span>
									<h4><a title="" href="#">CUARTO AÑO</a></h4>
									<p>CUOTA DE INCORPORACION S/. 1400,00</p>
									<p>PENSION ALIMENTICIA MARZO S/. 280,00</p>
									<h4><a title="" href="#">S/. 1.680,00</a></h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service">
									<span><i class="fa fa-pencil-square-o"></i></span>
									<h4><a title="" href="#">QUINTO AÑO</a></h4>
									<p>CUOTA DE INCORPORACION S/. 1300,00</p>
									<p>PENSION ALIMENTICIA MARZO S/. 280,00</p>
									<h4><a title="" href="#">S/. 1.580,00</a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<!--<section>
	<div class="block blackish">
	<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/1920x900) no-repeat 50% 0;"></div>
		<div class="container fancy">
			<div class="row">
				<div class="col-md-12">
					<div class="fun-facts">
						<div class="row">
							<div class="col-md-3">
								<div class="fact">
									<img src="images/fact1.png" alt="" />
									<span>700+</span>
									<i>HAPPY CLIENTS</i>
								</div>
							</div>
							<div class="col-md-3">
								<div class="fact">
									<img src="images/fact1.png" alt="" />
									<span>89%</span>
									<i>CASES SUCCESS</i>
								</div>
							</div>
							<div class="col-md-3">
								<div class="fact">
									<img src="images/fact1.png" alt="" />
									<span>$339K</span>
									<i>RECOVERED</i>
								</div>
							</div>
							<div class="col-md-3">
								<div class="fact">
									<img src="images/fact1.png" alt="" />
									<span>289+</span>
									<i>CASES DONE</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<section style="margin-top: 5%;">
	<div class="title">
		<span><strong>51 Años</strong> de experiencia</span>
		<h2>HIMNO DEL COLEGIO</h2><br><br>
		<audio src="../images/himno.mp3" controls autoplay>
			<p>Tu navegador no implementa el elemento audio</p>
		</audio>
		<!--<p>A continuación le mostramos los servicios educativos y de formación personal, que ofrece el Colegio Militar Ramón Castilla.</p>-->
	</div>
	<div class="block remove-gap">
		<div class="">
			<div class="row">
				<div class="col-md-12">
					<!--<div class="title">
						<span><strong>27 Years</strong> Experience in</span>
						<h2>GENERAL CIVIL LAW</h2>
						<p>Vestibulum at magna tellus. Vivamus sagittis nunc aliquet. Vivamin orci aliquam, vulputate vehicula. <br> Mauris porttitor eros vel saphicula. Donec eget ultricies ipsmconsequat rhoncus elit. Aenean sollcitudin,  <br> lorem quis bibendum auctor, nisi elit consequat. Morbi non massa erat.</p>
					</div>-->
					<!--<div class="addbar-wrapper">
						<div class="addbar">
							<p>Get Your Free Consultation</p> 
							<a href="#" title="">HIRE ME IMMEDIATELY</a>
							<p>Available 24/7</p>
						</div>
					</div>--><!-- Add Bar -->

					<div class="story">
						<div class="story-img"><img src="../images/himno.jpg" alt=""></div>
						<div class="container">
							<div class="row">
								<div class="col-md-7">									
									<div class="story-detail" style="padding: 15px 100px;">
										<!--<span>Most Recent Legal Case</span>-->
										<h4 style="font-size: 18px;">HIMNO I.E.P.M. "GRAN MARISCA RAMON CASTILLA"</h4>
										<p style="font-size: 11px; text-align: center;">I <br>CASTILLISTA DE GRAN ESPIRITU<br>HEREDEROS DE GLORIAS Y VIRTUDES <br> ADELANTE LA PATRIA NOS RECLAMA <br>SIEMPRE ALERTAS PARA TRIUNFAR <br> AL PERU LE DAREMOS CUAL PROCLAMA <br> MUCHOS LAUROS HASTA MORIR <br> CORO <br> MARISCAL RAMON CASTILLA <br> GRAN PALADIN DE NUESTRA HISTORIA <br> SOIS EL NUMEN DE TUS CADETES <br> QUE SERAN EL ORGULLO NACIONAL <br> II <br> CASTILLISTA DE GRAN ESPIRITU <br> HEREDEROS DE GLORIAS Y VIRTUDES <br> ADELANTE LA PATRIA NOS RECLAMA <br>SIEMPRE ALERTAS PARA TRIUNFAR <br> AL PERU LE DAREMOS CUAL PROCLAMA <br> MUCHOS LAUROS HASTA MORIR</p>
										<!--<div class="lawyer-intro">
											<img src="http://placehold.it/125x125" alt="">
											<div class="lawyer-info">
												<h5>NORMAN DENTON</h5>
												<span>Cooporate Lawyer</span>
												<strong>$2.1 Million <i>Invested</i></strong>
											</div>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2>NUESTRA HISTORIA</h2>
					</div>
					<div class="law-history">
						<div class="history-img"><img src="images/history.jpg" alt="" /></div>
						<div class="history-scroll">
							<div class="history-wrapper">
								<div class="history-item">
									<span>07 de Diciembre de 1963</span>
									<h4>Creación del Colegio Militar "Gran Mariscal Ramón Castilla"</h4>
									<p style="font-size: 12px; text-align: justify;">Siendo el Ministro de Educación el Dr. Francisco Miro Quezada Cantuarias y Presidente de la Republica el Arquitecto Fernando Belaunde Ferry.</p>
									<img src="images/history01.jpg" alt="" />
								</div>
								<div class="history-item">
									<span>17 de Abril de 1964 </span>
									<h4>Primer día de Funcionamiento</h4>
									<p style="font-size: 12px; text-align: justify;">Esta nueva Institución Educativa bajo la Dirección del Crl Inf José Graham Hurtado, quien como primer Director tuvo que enfrentar todos los sinsabores que ésta delicada misión le imponía, logrando equiparlo en una primera fase para poder albergar a los 208 cadetes.</p>
									<img src="images/history02.jpg" alt="" />
								</div>
								<div class="history-item">
									<span>31 de Agosto</span>
									<h4>Aniversario</h4>
									<p style="font-size: 12px; text-align: justify;">Se acordó celebrar como fecha de aniversario el día del nacimiento del ilustre soldado de la patria don Ramón Castilla Y Marquezado, ocurrido en Tarapacá el 31 de Agosto de 1797.</p>
									<img src="images/history03.jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<!--<section>
	<div class="block blackish">
	<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(images/mivi.jpg) no-repeat 50% 0;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title light">
						<span>Want To Know About Customers Thinking</span>
						<h2>CUSTOMER <span>REVIEWS</span></h2>
					</div>

					<div class="reviews-carousel">
						<div class="review">
							<p>Duis convallis turpisnisi fringilla. Phasellus ornare euismod varius nullam. Vivamus sagittis et nunc ut aliquet. Vivamus porta ligulain orci aliquam, ac vulputate leo vehicula. Mauris porttitor eroshicula. Donec eget ultricies ipsmconsequat rhoncus elit. Antegr sollicitudin ligula nonenim sodales, commodo tem ibus  ac vulputate leo vehicula.</p>
							<div class="reviewer-info">
								<img src="http://placehold.it/112x112" alt="" />
								<div class="reviewer-name">
									<strong>Dave Softel</strong>
									<span>Happy Buyer of April</span>
								</div>
							</div>
						</div>
						<div class="review">
							<p> Duis convallis turpisnisi fringilla. Phasellus ornare euismod. Vestibulum at magna tellus. Vivamus sagittis et nunc ut aliquet. Vivamus porta ligulain orci aliquam, ac vulputate leo vehicula. Mauris porttitor eroshicula. Donec eget ultricies ipsmconsequat rhoncus elit. Duis convallis turpisnisi fringilla ac vulputate leo vehicula. Phasellus ornare euismod varius nullam.</p>
							<div class="reviewer-info">
								<img src="http://placehold.it/112x112" alt="" />
								<div class="reviewer-name">
									<strong>Mark Moxren</strong>
									<span>Happy Buyer of April</span>
								</div>
							</div>
						</div>
						<div class="review">
							<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut aliquet. Vivamus porta ligulain orci aliquam, ac vulputate leo vehicula. Mauris porttitor eroshicula. Donec eget ultricies ipsmconsequat rhoncus elit. Antegr sollicitudin ligula nonenim sodales, commodo tem ibus. Duis convallis turpisnisi fringilla. Phasellus ornare euismod varius nullam.</p>
							<div class="reviewer-info">
								<img src="images/resource/reviewer3.jpg" alt="" />
								<div class="reviewer-name">
									<strong>Leo Ferniender</strong>
									<span>Happy Buyer of April</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<!--<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<span><strong>27 Years</strong> Experience</span>
						<h2>PRACTICE AREA</h2>
						<p>Vestibulum at magna tellus. Vivamus sagittis nunc aliquet. Vivamin orci aliquam eros <br/>vel saphicula. Donec eget ultricies ipsmconsequat.</p>
					</div>

					<div class="pricing-table">
						<div class="row">
							<div class="col-md-4">
								<div class="table-data">
									<div class="table-info">
										<img src="http://placehold.it/330x249" alt="" />
										<div class="table-info-wrap">
											<div class="table-info-inner">
												<span>We Are Always With You</span>
												<h5>Personal</h5>
												<strong><i>£</i>4,850 <span>/  Month</span></strong>
											</div>
										</div>
									</div>
									<ul>
										<li>Free Support</li>
										<li>Free Update</li>
										<li>Upto 10 user Access</li>
										<li>10GB Bandwith</li>
									</ul>
									<a href="#" title="">Choose Plan</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="table-data">
									<div class="table-info">
										<img src="http://placehold.it/330x249" alt="" />
										<div class="table-info-wrap">
											<div class="table-info-inner">
												<span>We Are Always With You</span>
												<h5>Business</h5>
												<strong><i>£</i>6,180 <span>/  Month</span></strong>
											</div>
										</div>
									</div>
									<ul>
										<li>Free Support</li>
										<li>Free Update</li>
										<li>Upto 15 user Access</li>
										<li>25GB Bandwith</li>
									</ul>
									<a href="#" title="">Choose Plan</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="table-data">
									<div class="table-info">
										<img src="http://placehold.it/330x249" alt="" />
										<div class="table-info-wrap">
											<div class="table-info-inner">
												<span>We Are Always With You</span>
												<h5>Premium</h5>
												<strong><i>£</i>7,259 <span>/  Month</span></strong>
											</div>
										</div>
									</div>
									<ul>
										<li>Free Support</li>
										<li>Free Update</li>
										<li>Upto 20 user Access</li>
										<li>50GB Bandwith</li>
									</ul>
									<a href="#" title="">Choose Plan</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<section>
	<div class="block remove-bottom">
	<div class="parallax still" data-velocity="-.05" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/1920x900) no-repeat 50% 0;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="white-wrapper">
						<div class="title simple">
							<!--<span>We Are Here To Help You. </span>-->
							<h2> <span>Contáctenos</span></h2>
							<p>Nos pondremos en contacto con usted, a la brevedad posible. <strong>I.E. MILITAR RAMON CASTILLA</strong></p>
						</div>
						<div class="contact-form">
							<div id="message"></div>
							<form method="post" action="contactm.php" name="contactform" id="contactform">
								<div class="row">
									<div class="col-md-6"><input name="name" type="text" id="name" placeholder="Nombres y Apellidos" /></div>
									<div class="col-md-6"><input type="text" placeholder="Teléfono" />	</div>
									<div class="col-md-12"><input  name="email" type="text" id="email"  placeholder="Correo Electrónico" /></div>
									<div class="col-md-12"><textarea rows="4" name="comments" id="comments"  placeholder="Mensaje"></textarea></div>
									<button title="" class="button" type="submit" id="submit">ENVIAR MENSAJE</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sponsors-carousel">
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--<footer>
	<div class="block blackish">
	<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/1920x900) no-repeat 50% 0;"></div>
		<div class="container">
			<div class="footer-widgets">
				<div class="row">
					<div class="col-md-5">
						<div class="widget">
							<h4 class="widget-title">About Investigate</h4>
							<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut aliquet. Vivamus in orci aliquam, ac vulputate leo vehicula. Mauris porttitor eros vel sapie hicula. Donec eget ultricies ipsmconsequat rhoncus elit.</p>
						</div>
						<div class="widget">
							<h4 class="widget-title">Sign Up Newsletter</h4>
							<p>Vivamus sagittis et nunc ut aliquet ivamus in orci aliquam.</p>
							<form class="signup">
								<input type="text" placeholder="Enter Email Address" />
								<button>SIGN UP NOW</button>
							</form>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<h4 class="widget-title">Flicker Photos</h4>
							<div class="flicker-photos lightbox">
								<div class="row">
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="widget">
							<h4 class="widget-title">Quick Links</h4>
							<ul>
								<li><a href="#" title="">Vestibulum at magna</a></li>
								<li><a href="#" title="">Sagittis et nunc</a></li>
								<li><a href="#" title="">Porta in orci aliquam</a></li>
								<li><a href="#" title="">Mauris porttitor</a></li>
								<li><a href="#" title="">Eros vel sapien</a></li>
								<li><a href="#" title="">Donec eget ultricies</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="widget">
							<div class="contact-widget">
								<span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span>U</span><span>S</span>
								<a class="btn" href="ontact.html" title="">Contact Now</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</footer>-->


<div class="bottom-footer">
	<div class="container">
		<p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>
		<!--
		<ul>
			<li><a href="#" title="">Inicio</a></li>
			<li><a href="#" title="">Institucional</a></li>
			<li><a href="#" title="">Administración</a></li>
			<li><a href="#" title="">Noticias</a></li>
			<li><a href="#" title="">Admisión 2016</a></li>
		</ul>-->
	</div>
</div>

<!--<div class="popup">
	<div class="popup-wrapper">
		<div class="popup-inner registration-form">
			<div class="popup-title">
				<span><i class="fa fa-black-tie"></i></span>
				<h5>INVESTIGATE</h5>
				<i>Law Firm PSD Template</i>
			</div>
			<div class="popup-form">
				<h5>Great To See You Here!</h5>
				<i>Let’s set up your account in just a couple of steps.</i>
				<form>
					<div class="row">
						<div class="col-md-12"><input type="text" placeholder="Full Name" /></div>
						<div class="col-md-12"><input type="text" placeholder="Last Name" /></div>
						<div class="col-md-12"><input type="email" placeholder="Email Address" /></div>
						<div class="col-md-12"><input type="text" placeholder="Username" /></div>
						<div class="col-md-12"><p>Letters, numbers and underscores.</p></div>
						<div class="col-md-12"><input type="text" placeholder="Password" /></div>
						<div class="col-md-12"><p>Longer passwords are stronger.</p></div>
						<div class="col-md-12"><input type="checkbox" /> <p>By creating an account you agree to our <a href="#" title="">Terms and Conditions</a> and our <a href="#" title="">Privacy Policy</a>.</p></div>
						<div class="col-md-12"><button type="submit">SIGN UP NOW</button></div>
					</div>
				</form>
			</div>
		</div>
		<div class="popup-inner signin-form">
			<div class="popup-title">
				<span><i class="fa fa-black-tie"></i></span>
				<h5>INVESTIGATE</h5>
				<i>Law Firm PSD Template</i>
			</div>
			<div class="popup-form">
				<h5>Great To Have You Back!</h5>
				<i>Let’s set up your account in just a couple of steps.</i>
				<form>
					<div class="row">
						<div class="col-md-12"><input type="text" placeholder="Full Name" /></div>
						<div class="col-md-12"><input type="email" placeholder="Email Address" /></div>
						<div class="col-md-12"><input type="text" placeholder="Username" /></div>
						<div class="col-md-12"><button type="submit">SIGN IN NOW</button></div>
						<div class="col-md-12"><p>New here? <a href="#" title="">Create an account</a>.</p></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>-->
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
$(document).ready(function(){
    $('.history-wrapper').enscroll({
        showOnHover: false,
        verticalTrackClass: 'track3',
        verticalHandleClass: 'handle3'
    });


	/* ============ Customer Reviews ================*/
	$('.reviews-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:30000,
		smartSpeed:2000,
		loop:true,
		dots:false,
		nav:true,
		margin:10,
		singleItem:true,
		items:1,
		animateIn:"fadeIn",
		animateOut:"fadeOut"
	});


	/* ============ Practice Areas ================*/
	$('.practice-area-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:30000,
		smartSpeed:2000,
		loop:true,
		dots:false,
		nav:false,
		margin:30,
		items:2,
		responsive:{
			1200:{items:2},
			980:{items:2},
			768:{items:2},
			480:{items:1},
			0:{items:1}
		}
	});

	/* ============ Sponsors Carousel ================*/
	$('.sponsors-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:30000,
		smartSpeed:2000,
		loop:true,
		dots:false,
		nav:false,
		margin:10,
		items:6,
		responsive:{
			1200:{items:6},
			980:{items:4},
			768:{items:3},
			480:{items:2},
			0:{items:2}
		}
	});
});
</script>

</body>
