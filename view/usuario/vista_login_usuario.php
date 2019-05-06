
<link rel="stylesheet" href="assets/css/style_login.css" />
<h1 class="page-header">INICIAR SESIÓN</h1>

<div class="row justify-content-center">
<form action="?c=usuario&a=iniciarSesion" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label>Nombre de usuario</label>
        <input type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="form-control" placeholder="Ingrese su nombre de usuario" style="text-align: center"  />
    </div>
    
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $user->password; ?>" class="form-control" placeholder="Ingrese su password" style="text-align: center" />
    </div>
    <hr/>
    <div class="text-center">
        <button class="btn btn-success">Acceder</button>
    </div>
</form>
</div>
<br>




