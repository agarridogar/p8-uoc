<section class="modal boat">
    <div class="whitebox">
        <h1>Añadir nueva Barco</h1>
        <form id="add-boat-form">
            <input name="port_id" type="number" class="form-control" placeholder="ID del puerto">
            <input name="category_id" type="number" class="form-control" placeholder="ID de la categoria">
            <input name="desc" type="text" class="form-control" placeholder="descripcion">
            <input name="max" type="number" class="form-control" placeholder="max de pasajeros">
            <input name="image" type="text" class="form-control" placeholder="imagen">
            <input name="price" type="number" class="form-control" placeholder="precio pack">
            <button type="submit" class="btn btn-success btn-block">Añadir</button>
        </form>
    </div>
</section>

<section class="modal port">
    <div class="whitebox">
        <h1>Añadir nuevo Puerto</h1>
        <form id="add-port-form">
            <input name="port" type="text" class="form-control" placeholder="nombre del puerto">
            <button type="submit" class="btn btn-success btn-block">Añadir</button>
        </form>
    </div>
</section>
    
<section class="modal category">
    <div class="whitebox">
        <h1>Añadir nueva Categoria</h1>
        <form id="add-category-form">
            <input name="category" type="text" class="form-control" placeholder="nombre de la categoria">
            <button type="submit" class="btn btn-success btn-block">Añadir</button>
        </form>
    </div>
</section>