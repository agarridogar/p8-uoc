<h1 class="page-header">Usuarios</h1>



<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id</th>
            <th>Roles</th>
            <th>Nombre</th>
            <th style="width:120px;">Pwd</th>
            <th style="width:120px;">email</th>

        </tr>
    </thead>
    <tbody>
	
    <?php foreach($this->model_usuario->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->usuario_id; ?></td>
            <td><?php echo $r->roles_id; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->password; ?></td>
            <td><?php echo $r->email; ?></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
