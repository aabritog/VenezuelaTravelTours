<!--<?php 
    session_start();
?>-->
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="index.php">
                    <img width="200px" height="28px" src="img/OnlyOneTravel-logo.png" />
                </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?php if($_SESSION['id']=='1') echo 'active'; ?>"><a href="index.php"><span class="gly glyphicon glyphicon-home">&nbsp;</span>Inicio <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Quienes Somos<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="<?php if($_SESSION['id']=='2') echo 'active'; ?>"><a href="#">Misi&oacute;n, Visi&oacute;n y Objetivo</a></li>
                                <!--<li class="<?php if($_SESSION['id']=='3') echo 'active'; ?>"><a href="curador.php">El Curador</a></li>-->                       
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Destinos turísticos<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="<?php if($_SESSION['id']=='5') echo 'active'; ?>"><a href="canaima.php">Canaima</a></li>
                                <li class="<?php if($_SESSION['id']=='6') echo 'active'; ?>"><a href="#">Salto Angel</a></li>
                            </ul>
                        </li>
                        <!--<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Servicios<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="<?php if($_SESSION['id']=='9') echo 'active'; ?>"><a href="licencias.php">Licencias</a></li>
                                <li class="<?php if($_SESSION['id']=='10') echo 'active'; ?>"><a href="reconocimiento.php">Reconocimiento de Construcciones</a></li>
                                <li class="<?php if($_SESSION['id']=='11') echo 'active'; ?>"><a href="otras-actuaciones.php">Otras Actuaciones</a></li>
                            </ul>
                        </li>
                        <li class="<?php if($_SESSION['id']=='12') echo 'active'; ?>"><a href="requisitos.php">Requisitos</a></li>
                        <li class="<?php if($_SESSION['id']=='13') echo 'active'; ?>"><a href="normativa.php">Normativa</a></li>
                        <li class="<?php if($_SESSION['id']=='14') echo 'active'; ?>"><a href="horarios.php">Horarios</a></li>-->
                        <li class="<?php if($_SESSION['id']=='4') echo 'active'; ?>"><a href="sede.php">Nuestra Sede</a></li> 
                        <li class="<?php if($_SESSION['id']=='15') echo 'active'; ?>"><a href="contacto.php">Contacto</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>