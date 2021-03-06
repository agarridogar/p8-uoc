<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
        
        <meta charset="utf-8" />

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />

        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
    <body>
        
    <div class="container">

        <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="assets/img/logo_pequeno.png" style="width: 50px; height: 50px;"/></a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="?c=categorias&a=ListarVistaCategorias">Packs</a></li>
            <li><a href="?c=web&a=Contacto">Contacto</a></li>
            <!--<li><a href="#">Dónde estamos</a></li>-->
            <li><a href="?c=nosotros&a=VistaNosotros">Quiénes somos</a></li>
            <li><a href="?c=web&a=faq">FAQ</a></li>
            <li><a href="?c=servicios&a=VistaServicios">Servicios</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

            
            <?php if(empty($_SESSION['nombre'])){ ?>
            <li><a href="?c=web&a=RegistroUsuarios"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
            <li><a href="?c=web&a=LoginUsuario"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            <?php } ?>
            
        </div>
        </nav>

