
<link rel="stylesheet" href="assets/css/style_login.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<div class="container login-container">
            <div class="row">
                <div class="col-md-6  col-md-offset-1 login-form-1">
                <h3>Inicia sesión</h3>
                    <form action="?c=usuario&a=iniciarSesion" method="post" enctype="multipart/form-data">                    
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
                            <p><small><b>Introduce tu nombre de usuario</small></b></p>
                        </div>
                        <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="form-control" placeholder="Ingresa tu nombre de usuario" style="text-align: center"  required/>
                        </div>
                        <div class="form-group">
                        <input type="password" name="password" value="<?php echo $user->password; ?>" class="form-control" placeholder="Ingresa tu password" style="text-align: center" required/>
                        </div>
                        <div class="form-group">
                            <div class="text-center">             
                                <button class="btn btn-warning btn-responsive btninter"><b>Iniciar sesión</b></button>
                            </div>
                        </div>
                     </form>
                </div>
                <div class="col-md-4  login-form-2">
                    <h3>¡Bienvenido!</h3>
                    <br>
                    
                    <p> ¿Aún no estás registrado? Podrás hacerlo desde aquí. </p>

                    <form action="?c=web&a=RegistroUsuarios" method="post" enctype="multipart/form-data">                    
                        <div class="form-group">
                            <div class="text-center">                    
                            <button class="btn btn-responsive btninter"><b>Registrarse</b></button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
</div>
</div>