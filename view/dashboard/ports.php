

<main class="dashboard ports">
  <h1> Lista de Puertos</h1>
  <div class="whitebox">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>puerto_id</th>
          <th>puerto_descripcion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($response as $clave=>$value) { ?>
          <tr>
            <th><?php print_r($value['puerto_id']); ?></th>
            <td><?php print_r($value['puerto_descripcion']); ?></td>
            <td class="action">
              <span onclick="deletePort(<?php echo $value['puerto_id'] ?>)" class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="add_area">
      <button type="button" class="btn btn-warning" onclick="showPopUp('port')">+</button>
  </div>
</main>