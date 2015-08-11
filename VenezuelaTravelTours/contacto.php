<?php
    session_start();
    $_SESSION['id']="15";
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <?php include("head.php"); ?>
        
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
    <title>Curadur&iacute;a Urbana 2 Soacha</title>
	<link rel="shortcut icon" href="img/icono.ico" />    
    <body>
        <?php include("menu.php"); ?>
        <div style="margin-top: 70px;"></div>
        <div class="container">
            
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
            ?>

            <form id="frmContacto" method="post" action="correo.php">
                <div class="form-group">
                    <label for="nombres">Nombres:</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese sus nombres" />
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" />
                </div>
              <!--  <div class="form-group">
                    <label for="fijo">Tel&eacute;fono Fijo:</label>
                    <input type="tel" id="fijo" name="fijo" class="form-control" onkeypress="return validarNro(event);" placeholder="Fijo" />
                </div>-->
                <div class="form-group">
                    <label for="tel">Tel&eacute;fono:</label>
                    <input type="tel" id="tel" name="tel" onkeypress="return validarNro(event);" class="form-control" placeholder="Celular" />
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <div class="input-group">
                        <div class="input-group-addon">@</div>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electronico" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="texto">Mensaje:</label>
                    <textarea class="form-control" name="texto" id="texto" rows="5"></textarea>
                </div>
                <input class="btn btn-primary btn-lg btn-block" id="enviar" value="Enviar" name="enviar" type="submit" />
            </form>
        </div>
        
        <?php include("footer.php"); ?>
     </body>
</html>