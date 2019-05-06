<h1>REGISTRO DE USUARIOS</h1>

<div class="row justify-content-center" >
<form action="?c=usuario&a=registrarUsuario" method="post" enctype="multipart/form-data" >
       
        <div class="form-group">
        <label>Seleccione un nombre de usuario</label>
        <input type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="form-control" placeholder="Introduzca un nombre de usuario" style="text-align: center" required />
    </div>

    <div class="form-group">
        <label>Seleccione su password</label>
        <input type="password" name="password" value="<?php echo $user->password; ?>" class="form-control" placeholder="Ingrese su password" style="text-align: center"  required />
    </div>

    <div class="form-group">
        <label>Introduzca un email</label>
        <input type="email" name="email" value="<?php echo $user->email; ?>" class="form-control" placeholder="Ingrese su email" style="text-align: center" required />
    </div>
    <hr/>
    <div class="text-center">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
</div>

<?php
    if(isset($_SESSION["errorvalidacion"])){
        echo "<div class='row justify-content-center' >";
        echo "<h4>".$_SESSION["errorvalidacion"]."</h4>";
        echo "<div";
        session_unset();
    }
?>
