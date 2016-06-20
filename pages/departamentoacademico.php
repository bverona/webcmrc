<!DOCTYPE html>
<?php

session_start();
$_SESSION['login']='';
session_destroy();

?><head>
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



<section style="margin-top: 5%;">
	<div class="title" style="margin-bottom: 0px;">
		<span><strong>51 Años</strong> de experiencia</span>
		<h2>DEPARTAMENTO ACADÉMICO</h2>
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
						<!--<div class="story-img"><img src="images/himno.jpg" alt=""></div>-->
						<div class="container">
							<div class="row">
								<div class="col-md-12">									
									<div class="story-detail" style="padding: 15px 100px;">
										<!--<span>Most Recent Legal Case</span>-->
										<p style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Es un órgano de línea de la Dirección General, está a cargo de un profesional de la educación que ostenta la mayor escala magisterial y experiencia en el campo de la administración.</p>
										<h4>Objetivo:</h4><br>
										<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Planificar, implementar, ejecutar y evaluar las acciones pedagógicas para el logro de las competencias y capacidades que estable el  Diseño Curricular de Educación Básica emitido por el MINEDU.</li><br>
										<h4>Funciones:</h4><br>
										
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Orientar y supervisar la aplicación de la política y normatividad educativa nacional y regional, en materia de gestión pedagógica.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Aplicar estrategias alternativas orientadas a mejorar la calidad de los servicios educativos que se brindan. </li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Desarrollar programas de prevención y atención integral, así como programas de bienestar social para los educandos, en coordinación con los Gobiernos Municipales e instituciones públicas privadas especializadas.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Apoyar y participar en programas y proyectos de investigación e innovación pedagógica, y evaluar el impacto en los servicios educativos que se brinda.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Conducir e incrementar la productividad y eficiencia de los procesos de gestión pedagógica.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Asesorar, monitorear y supervisar las acciones de desarrollo curricular.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Formular, coordinar, ejecutar y evaluar el Plan de Trabajo Anual, con participación del personal docente y con la colaboración dela Asociación de Padres de Familia (APAFA).</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Formular el Cuadro de Necesidades de Bienes y Servicios de su departamento en coordinación con el departamento de administración general.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Planear y elaborar el cuadro de horas con la carga horaria de los docentes, considerando el Presupuesto Analítico de Personal (PAP), el que sustentará ante la Dirección General para su aprobación previa certificación presupuestaria y dar conocimiento a la Gerencia Regional de Educación, y controlar su ejecución de acuerdo a la normatividad vigente.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Elaborar los instrumentos de gestión: Proyecto Educativo Institucional (PEI), Plan Anual de trabajo (PAT); Plan de supervisión Educativa (PSE); Proyecto Curricular Institucional (PCI).</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Realizar acciones de actualización y capacitación del personal docente.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Organizar y desarrollar programas en apoyo de la educación, la ciencia, la tecnología, la cultura, la recreación y deporte, propiciando la participación de la comunidad.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Asesorar y absolver las consultas de carácter técnico pedagógico.</li>
											<li style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Las demás funciones asignadas por la Dirección General.</li>
										
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
