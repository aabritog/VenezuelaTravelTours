<!DOCTYPE HTML>

<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Venezuela Travel Tours</title>
		<meta name="description" content="Venezuela Travel Tours y Only One Travel te llevan a conocer los destinos turísticos mas exoticos de Venezuela y el mundo">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/css/bootstrap.min.css">
		<script src="JQuery/jquery-validation-1.13.1/dist/jquery.validate.min.js"></script>
		<script src="JQuery/jquery-2.1.3.min.js"></script>
		<script src="bootstrap-3.3.4-dist/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<script type="text/javascript">
		    $().ready(function(){
		        $('#myModal').modal('show');
		    });
		</script>

        <script>
        $().ready(function(){
            $("#frmContacto").validate({
            rules: {
                nombres: "required",
                apellidos: "required",
                destinos: "required",
                email:{
                        required:true,
                        email:true
                    },
                texto:"required",
                tel:{   required:true,
                            minlength: 7,
                            maxlength:13
                }
                      

                    },  
            messages: {
                nombres: "Este campo es obligatorio",
                apellidos: "Este campo es obligatorio",
                destinos: "Este campo es obligatorio",
                email: {
                        required:"Este campo es obligatorio",
                        email:"El correo no es válido"
                },
                texto: "Este campo es obligatorio",
                tel:{   required:"Este campo es obligatorio",
                            minlength: "El teléfono no es válido. Debe tener minimo 7 dígitos",
                            maxlength:"El teléfono no es válido. Debe tener maximo 13 dígitos"
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
			<div class="container">
				<hr />			
				
					<div id="contacto" style="margin-top: 100px;">
						<br>
						<header>
							<p>CONTACTANOS Y PLANIFICAMOS TU VIAJE</p>

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
								    	<strong>Advertencia:</strong> Error al enviar el correo.
								</div>
								<?php
								    }
								}
								?>
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
			                    <label style="color: #fff" for="destinos">Destinos de interés:</label>
			                    <input type="text" class="form-control" name="destinos" id="destinos" placeholder="Ingrese el/los destino(s)" />
			                </div>			                
			                <div class="form-group">
			                    <label style="color: #fff" for="traveldate">Fecha de viaje: </label>
			                    <div class="input-group">
			                    	<input type="date" name="traveldate" id="traveldate" class="form-control" step="1" min="<?php echo date("Y-m-d"); ?>" max="2020-12-31" value="<?php echo date("Y-m-d"); ?>">
			                    </div>			                    
			                </div>
			                <div class="form-group">
			                    <label style="color: #fff" for="passenger">Número de pasajeros:</label>
			                    <div class="input-group">
			                    	<input type="number" name="passenger" id="passenger" class="form-control" min="1" max="50" value="1">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label style="color: #fff" for="texto">Mensaje:</label>
			                    <textarea class="form-control" name="texto" id="texto" rows="5"></textarea>
			                    <input type="hidden" id= "id_page" name="id_page" value="<?php echo $_SERVER['SCRIPT_NAME'] ?>" />
			                </div>
			                

			                <input class="btn btn-primary btn-lg btn-block" id="enviar" value="Enviar" name="enviar" type="submit" />
			         	</form>                  
			         				                
						<br><br><br>		
					</div>
								<div style="position:absolute; bottom:0; right:0; padding: 15px;">
									<a href="../index.php"><img src="images/flags/shiny/32/Spain.png" alt="Español" title="Español"></a>								
									<a href="en/index.php"><img src="images/flags/shiny/32/United-States.png" alt="English" title="English"></a>
								</div>
			 </div>
		</div>

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