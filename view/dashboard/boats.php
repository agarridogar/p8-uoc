<main class="dashboard boats">
  <h1> Lista de Barcos</h1>
  <div class="whitebox">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>barco_id</th>
          <th>categoria_id</th>
          <th>puerto_id</th>
          <th>descripcion_barco</th>
          <th>max_pasajeros</th>
          <th>barco_imagen</th>
          <th>precio_pack</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($response as $clave=>$value) { ?>
          <tr>
            <th><?php print_r($value['barco_id']); ?></th>
            <td><?php print_r($value['categoria_id']); ?></td>
            <td><?php print_r($value['puerto_id']); ?></td>
            <td><?php print_r($value['descripcion_barco']); ?></td>
            <td><?php print_r($value['max_pasajeros']); ?></td>
            <td><?php print_r($value['barco_imagen']); ?></td>
            <td><?php print_r($value['precio_pack']); ?></td>
            <td class="action">
              <img src="#"/>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="add_area">
      <button type="button" class="btn btn-warning" onclick="showPopUp('boat')">+</button>
  </div>
</main>