<link rel="stylesheet" href="assets/css/style_categorias2.css" />


<body>      
<h1>Nuestras embarcaciones</h1>
    <div "id="vist">
        <?php foreach($this->model_cat->ObtenerProductoId($_REQUEST['id_categoria']) as $catbar):  ?>
            <div id="vistca">
                <h3>Ref. Barco: 00<?php echo $catbar->barco_id; ?></h3> 
                <h6>Precio: <?php echo $catbar->precio_pack; ?> €</h6>
                <img src="<?php echo $catbar->barco_imagen;?>" alt=""  style="widht:10px, height:20px; "/>
                <button  type="button" class="btn btn-light"><a href="?c=categorias&a=compraBarco&barco_id=<?php echo $catbar->barco_id;?>">+ INFO</a></button>
                
            <div>
        <?php endforeach ?>
    </div>
</body>




