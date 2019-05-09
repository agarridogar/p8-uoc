<link rel="stylesheet" href="assets/css/style_login.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<div class="container login-container">
            <div class="row">
                <div class="col-md-4 col-md-offset-1  login-form-2">
                <h3>¿Ya estás registrado?</h3>
                    <br>
                    
                    <p> Para conectarte, por favor, introduce tus datos personales aquí </p>

                    <form action="?c=web&a=LoginUsuario" method="post" enctype="multipart/form-data">                    
                        <div class="form-group">
                            <div class="text-center">                    
                            <button class="btn btn-responsive btninter"><b>Iniciar sesión</b></button>
                            </div>
                        </div>        
                     </form>
                </div>
                <div class="col-md-6  login-form-1">
                <h3>Crear cuenta</h3>
                <form action="?c=usuario&a=registrarUsuario" method="post" enctype="multipart/form-data">                    
                    <div class="text-center"> 
                        <span class="fa-stack fa-sm">
                            <i class="far fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </span>
                        <span class="fa-stack fa-sm">
                            <i class="far fa-circle fa-stack-2x"></i>
                            <i class="fab fa-google-plus fa-stack-1x"></i>
                        </span>
                        <span class="fa-stack fa-sm">
                            <i class="far fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin fa-stack-1x"></i>
                        </span>
                        </div>
                        <div class="text-center">
                            <p><small><b>Introduce un nombre de usuario para registrate</small></b></p>
                        </div>
                        <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="form-control" placeholder="Ingresa un nombre de usuario" style="text-align: center"  required/>
                        </div>
                        <div class="form-group">
                        <input type="password" name="password" value="<?php echo $user->password; ?>" class="form-control" placeholder="Ingresa un password" style="text-align: center" required/>
                        </div>
                        <div class="form-group">
                        <input type="email" name="email" value="<?php echo $user->email; ?>" class="form-control" placeholder="Ingresa un email" style="text-align: center" required/>
                        </div>
                        <div class="form-group">
                            <div class="text-center">             
                                <button class="btn btn-warning btn-responsive btninter"><b>Registrarse</b></button>
                            </div>
                        </div>

                    </form>
                </div>
        </div>
</div>
</div>


<?php
    if(isset($_SESSION["errorvalidacion"])){
        echo "<div class='row justify-content-center' >";
        echo "<h4>".$_SESSION["errorvalidacion"]."</h4>";
        echo "<div";
        session_unset();
    }
?>



