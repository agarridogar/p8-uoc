<main class="dashboard categories">
  <h1> Lista de Categorias</h1>
  <div class="whitebox">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>categoria_id</th>
          <th>categoria_barco</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($response as $clave=>$value) { ?>
          <tr>
            <th><?php print_r($value['categoria_id']); ?></th>
            <td><?php print_r($value['categoria_barco']); ?></td>
            <td class="action">
              <span onclick="deleteCategory(<?php echo $value['categoria_id'] ?>)" class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="add_area">
      <button type="button" class="btn btn-warning" onclick="showPopUp('category')">+</button>
  </div>
</main>