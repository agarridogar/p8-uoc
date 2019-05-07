<link rel="stylesheet" href="assets/css/style_categorias.css" />
 <h1>Categorias</h1>
    <div class="row" id="cat">
    
        <?php foreach($this->model_cat->ListarCategorias() as $r): ?>
            <div class="col-6 col-sm-4" id="subcat">
               
                <a id="a" href="" ><?php echo $r->categoria_barco; ?></a>
                
            </div>

            
            
        <?php endforeach; ?>

            
    </div>
    

