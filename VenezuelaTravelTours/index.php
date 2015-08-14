<!DOCTYPE HTML>

<html lang="es">
	<head>

		<title>ONLY ONE TRAVEL</title>
		<link href="images/Logo-Final.ico" rel="shortcut icon" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/css/bootstrap.min.css">
		<script src="JQuery/jquery-validation-1.13.1/dist/jquery.validate.min.js"></script>
		<script src="JQuery/jquery-2.1.3.min.js"></script>
		<script src="bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

        <script>
        $().ready(function(){
            $("#frmContacto").validate({
            rules: {
                nombres: "required",
                apellidos: "required",
                email:{
                        required:true,
                        email:true
                    },
                texto:"required",
                tel:{   required:true,
                            minlength: 7,
                            maxlength:10
                }
                      

                    },  
            messages: {
                nombres: "Este campo es obligatorio",
                apellidos: "Este campo es obligatorio",
                email: {
                        required:"Este campo es obligatorio",
                        email:"El correo no es válido"
                },
                texto: "Este campo es obligatorio",
                tel:{   required:"Este campo es obligatorio",
                            minlength: "El teléfono no es válido. Debe tener minimo 7 dígitos",
                            maxlength:"El teléfono no es válido. Debe tener maximo 10 dígitos"
                }
                      }
            });
        }); 
        
        function validarNro(e) {
        var key;
        if(window.event) // IE
            {
            key = e.keyCode;
            }
        else if(e.which) // Netscape/Firefox/Opera
            {
            key = e.which;
            }
         
        if (key < 48 || key > 57)
            {
            if(key == 8) // Detectar . (punto) y backspace (retroceso)
                { return true; }
            else
                { return false; }
            }
        return true;
        }
        </script>

		</head>
		

		


	<body class="homepage">

		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<!--<a href="index.php" id="logo"><img src="images/Logo-Final.png" width="450px" height="350px" alt="Logo" /></a>-->
							</header>
							<!--<footer>
								<a href="#banner" class="button circled scrolly">Inicio</a>
							</footer>-->
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="somos.php">Quienes somos</a></li>
								<li>
									<a href="#carousel" class="scrolly">Destinos</a>
									<ul>
										<li><a href="salto.php">Salto Angel</a></li>
										<li><a href="#">Canaima</a></li>
									</ul>
								</li>
								<li><a href="#contacto" class="scrolly">Contacto</a></li>
								<!--<li><a href="no-sidebar.php">No Sidebar</a></li>-->
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Only One Travel te lleva a conocer los destinos turísticos mas exoticos del mundo</h2>
						<!--<p>
							A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
							Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.
						</p>-->
					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel" id="carousel">

						<article>
							<a href="salto.php" class="image featured"><img src="images/SaltoAngel.jpg" alt="" /></a>
							<header>
								<h3><a href="salto.php"><p>Salto Angel<br>Venezuela</p></a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Canaima.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Canaima<br>Venezuela</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/Galapagos.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Galapagos<br>Ecuador</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/SalarDeUyuni.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Salar de Uyuni<br>Bolivia</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/MachuPicchu.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Machu Picchu<br>Perú</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/LencoisMaranhenses.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Lencois Maranhenses<br>Brazil</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

<!--						<article>
							<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Fermentum sagittis proin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Sed quis rhoncus placerat</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Ultrices urna sit lobortis</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Varius magnis sollicitudin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
-->
					</div>
				</section>

			<!-- Main -->
				<div class="wrapper style2">
					<div id="carousel-principal" class="carousel slide" data-ride="carousel">
		        <!-- Indicadores del carousel slide -->
		        	<ol class="carousel-indicators">
		            <li data-target="#carousel-principal" data-slide-to="0" class="active"></li>
		            <li data-target="#carousel-principal" data-slide-to="1"></li>
		            <li data-target="#carousel-principal" data-slide-to="2"></li>
		            <li data-target="#carousel-principal" data-slide-to="3"></li>
		            <!--<li data-target="#carousel-principal" data-slide-to="4"></li>-->
		       		</ol>
		        
		        <div class="carousel-inner" role="listbox">

		            <div class="item active">
                        <img src="images/slide/Canaima01.jpg" width="100%" height="1200px" alt="" />
                        <div class="carousel-caption">
                            <h3>Canaima</h3>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="images/slide/SaltoAngel01.jpg" width="100%" height="1200px" alt="" />
                        <div class="carousel-caption">
                            <h3>Salto Angel</h3>
                        </div>
                    </div>
                    
		            <div class="item">
		                <img src="images/slide/Canaima02.jpg" width="100%" height="1200px" alt="" />
		                <div class="carousel-caption">
		                    <h3>Canaima</h3>
		                </div>
		            </div>
		            
		            <div class="item">
		                <img src="images/slide/Escalando.jpg" width="100%" height="1200px" alt="" />
		                <div class="carousel-caption">
		                    <h3>&nbsp;</h3>
		                </div>
		            </div>

		            <!--<div class="item">
		                <img src="images/pic06.jpg" width="100%" alt="" />
		                <div class="carousel-caption">
		                    <h3>Imagen 4</h3>
		                </div>
		            </div>
		            <div class="item">
                        <img src="images/pic06.jpg" width="100%" alt="" />
                        <div class="carousel-caption">
                            <h3>Imagen 5</h3>
                        </div>
                 </div>-->
		            
		            <a class="left carousel-control" href="#carousel-principal" role="button" data-slide="prev">
		                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		                <span class="sr-only">Anterior</span>
		            </a>
		            <a class="right carousel-control" href="#carousel-principal" role="button" data-slide="next">
		                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		                <span class="sr-only">Siguiente</span>
		            </a>
		        </div>
		        
		    </div>
		    <div id="nostros">
		    	
			<div class="container">
				<div class="panel panel-warning">
				<div class="panel-heading">
			    	<h2 class="panel-title">
			    		<a data-toggle="collapse" data-parent="#accordion" href="#primerCollapse" aria-expanded="true" aria-controls="primerCollapse">QUIENES SOMOS</a>
			  		</h2>
			  	</div>
          		<div id="primerCollapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">			  
			    	<div class="panel-body">
							<p>
								En lugar de buscar la conexión perfecta entre el compromiso y la pasión: lo creamos. 
								Grupo Only One, es una empresa "detallada orientada", con una vasta experiencia en:
								desarrollo de negocios, soluciones de vivienda y asesoría de viajes.
							</p>
						<p>
							<strong>Nuestra misión:</strong><br>
							• Ofrecer un producto nunca antes visto en América Latina.<br><br>
							
							<strong>Nuestro secreto del éxito:</strong><br>
							• Contamos con un personal altamente calificado.<br>
							• Nos fusionamos un enfoque centrado en el cliente con herramientas que permiten ahorrar tiempo.<br>
							• Ofrecemos asistencia inmediata.<br>
							• Hablamos tu idioma<br><br>
							
							<strong>Nuestros productos:</strong><br>
							• Desarrollo de negocios, traducciones o de documentos y traducción simultánea<br>
							• Soluciones Habitacionales:<br>
							  * Bienes Raíces<br>
							  * Asistencia Legal<br>
							  * Apertura de cuentas bancarias<br>
							• Consultoría de Turismo, arreglos o y viajes de ocio<br>
							• Transporte<br>
						</p>
			  		</div>
			  	</div>
				</div>
			</div>	
		    <!--<article id="main" class="container special">

							<header>
							<h2><a href="#">Quienes Somos</a></h2>
							</header>
							<p>
								En lugar de buscar la conexión perfecta entre el compromiso y la pasión: lo creamos. 
								Grupo Only One, es una empresa "detallada orientada", con una vasta experiencia en:
								desarrollo de negocios, soluciones de vivienda y asesoría de viajes.
							</p>

						<p>
							Nuestra misión:<br>
							• Ofrecer un producto nunca antes visto en América Latina.<br><br>
							
							Nuestro secreto del éxito:<br>
							• Contamos con un personal altamente calificado.<br>
							• Nos fusionamos un enfoque centrado en el cliente con herramientas que permiten ahorrar tiempo.<br>
							• Ofrecemos asistencia inmediata.<br>
							• Hablamos tu idioma<br><br>
							
							Nuestros productos:<br>
							• Desarrollo de negocios<br>
							traducciones o de documentos y traducción simultánea<br>
							• Soluciones Habitacionales<br>
							o Bienes Raíces<br>
							o Asistencia Legal<br>
							o Apertura de cuentas bancarias<br>
							• Consultoría de Turismo<br>
							arreglos o y viajes de ocio<br>
							o Transporte<br><br>
						</p>
						<footer>
							<a href="somos.php" class="button">Continuar Leyendo</a>
						</footer>
					</article>-->
			</div>

			<!-- Features -->
				<div class="wrapper style1">
					<section id="features" class="container special">
						<header>
							<h2>NUESTROS PAQUETES</h2>
							<!--<p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>-->
						</header>
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/Angel-Falls.png" alt="" /></a>
								<header>
									<h3><a href="salto.php">Salto Angel</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/canaima998xgh7.png" alt="" /></a>
								<header>
									<h3><a href="#">Canaima</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Otro</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
						</div>
					</section>

				</div>

	</div>

			<!-- Features -->
				<!--<div class="wrapper style1">
					<section id="features" class="container special">
						<header>
							<h2>NUESTROS PAQUETES</h2>
						</header>
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/Angel-Falls.png" alt="" /></a>
								<header>
									<h3><a href="salto.php">Salto Angel</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/canaima998xgh7.png" alt="" /></a>
								<header>
									<h3><a href="#">Canaima</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Otro</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
						</div>
					</section>

				</div>-->

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<?php include("twitter.php"); ?>
									
									<!--<ul class="divided">
										<li>
											<article class="tweet">
												Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
												<span class="timestamp">5 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Hendrerit rutrum quisque.
												<span class="timestamp">30 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
												<span class="timestamp">5 hours ago</span>
											</article>
										</li>
									</ul>-->
								</section>

							<!-- Posts -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
									
									<?php include("facebook.php"); ?>
									<!--<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Nisl fermentum integer</a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Phasellus portitor lorem</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Magna tempus consequat</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Feugiat lorem ipsum</a></h3>
												</header>
												<span class="timestamp">2 days ago</span>
											</article>
										</li>
									</ul>-->
								</section>

							<!--Instagram http://instansive.com/-->														
								<section class="4u 12u(mobile)">								
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row 25%">
									
									<?php include("instagram.php"); ?>
									</div>
								</section>

						</div>
            <!--						<hr />
			
<?php
            if (isset($_GET['id'])) {
                if ($_GET['id']==1) {
            ?>
                    <div class='alert alert-success alert-dismissible'  role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Enhorabuena</strong> Correo enviado correctamente.
</div>
<?php
                } else {?>
                   <div class='alert alert-danger alert-dismissible'  role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, youre not looking too good.
</div>
<?php
                }
                
            }
            ?>-->
									<?php include("contacto.php"); ?>						
						
		<!--<div id="contacto" style="margin-top: 100px;">

			<header>
				<p>CONTACTANOS Y PLANIFICAMOS TU VIAJE</p>
			</header>
			
			
			<form id="frmContacto" method="post" action="correo.php">
                <div class="form-group">
                    <label style="color: #fff" for="nombres">Nombres:</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese sus nombres" />
                </div>
                <div class="form-group">
                    <label style="color: #fff" for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" />
                </div>
                <div class="form-group">
                    <label style="color: #fff" for="tel">Tel&eacute;fono:</label>
                    <input type="tel" id="tel" name="tel" onkeypress="return validarNro(event);" class="form-control" placeholder="Celular" />
                </div>               
                <div class="form-group">
                    <label style="color: #fff" for="email">Correo:</label>
                    <div class="input-group">
                        <div class="input-group-addon">@</div>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electronico" />
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: #fff" for="texto">Mensaje:</label>
                    <textarea class="form-control" name="texto" id="texto" rows="5"></textarea>
                </div>
                <input class="btn btn-primary btn-lg btn-block" id="enviar" value="Enviar" name="enviar" type="submit" />
         </form>         
         
		<br><br><br>-->
		
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<ul class="icons">
											<li><a href="https://twitter.com/vzlatraveltours" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="https://www.facebook.com/VenezuelaTravelTours" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="https://instagram.com/venezuelatraveltours" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<!--<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>-->
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>Dirección: Duplex 4 Calle 61 Obarrio Ciudad de Panamá, Panamá</li><br><br>
											<li>&copy;Todos los derechos Reservados</li><br>
											<li>Design: <a href="#">--</a></li>
										</ul>
									</div>

							</div>

						</div>						
		</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			 <script src="JQuery/jquery-2.1.3.min.js"></script>
        <script src="bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
        <script src="JQuery/jquery-validation-1.13.1/dist/jquery.validate.min.js"></script>

	</body>
</html>