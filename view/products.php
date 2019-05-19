<link rel="stylesheet" href="assets/css/style_products.css" />

<main class="product-area">
<?php foreach($this->model_cat->infoBoat($_REQUEST['barco_id']) as $r):  ?>
	<div>
		<h1>Barco Nº: <?php echo $product['barco_id'] ?></h1>
		<div class="white-box column-design">
			<div class="header-products column-design">
				<div class="principal-box row-design">
					<div class="images column-design">
						<div class="principal">
							<img src="/assets/img/<?php echo $product['barco_imagen'] ?>" >
						</div>
						<div class="more-img row-plain">
							<img src="/assets/img/<?php echo $product['barco_imagen'] ?>" >
							<img src="/assets/img/<?php echo $product['barco_imagen'] ?>" >
							<img src="/assets/img/<?php echo $product['barco_imagen'] ?>" >
							<img src="/assets/img/<?php echo $product['barco_imagen'] ?>" >
						</div>
					</div>
					
					<div class="excerpt column-design">
						<div class="price-box">
							<h1>Precio</h1>
							<p><?php echo $product['precio_pack'] ?> € al dia </p>
						</div>
						
						<a class="btn suncoast" href="?c=cart&id=<?php echo $product['barco_id'] ?>">
							Comprar pack
						</a>
						</div>
				</div>
				<div class="perks row-design">
					<div class="column-design">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<?php echo $product['max_pasajeros'] ?> plazas
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
						1-2 baños
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						Min 5 dias
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
						Con Patrón
					</div>
				</div>
			</div>
			<div class="description">
				<h3>Description</h3>
				<p><?php echo $product['descripcion_barco'] ?></p>
			</div>
		</div>
	</div>

	

</main>



