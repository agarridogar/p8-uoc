<link rel="stylesheet" href="assets/css/style_products.css" />

<main class="product-area">
	<div>
		<h1>Nombre producto</h1>
		<div class="white-box column-design">
			<div class="header-products column-design">
				<div class="principal-box row-design">
					<div class="images column-design">
						<div class="principal">
							<img src="<?php echo $product['barco_imagen'] ?>" >
						</div>
						<div class="more-img row-plain">
							<img src="<?php echo $product['barco_imagen'] ?>" >
							<img src="<?php echo $product['barco_imagen'] ?>" >
							<img src="<?php echo $product['barco_imagen'] ?>" >
							<img src="<?php echo $product['barco_imagen'] ?>" >
						</div>
					</div>
					<div class="excerpt column-design">
						<p class="price">
							<?php echo $product['precio_pack'] ?> € al dia 
						</p>
						<p>2 camarotes, 1 baño, 12 plazas, patron incluido</p>
						<button class="btn suncoast">
							Solicita presupuesto sin compomiso
						</button>
						</div>
				</div>
				<div class="perks row-design">
					<div class="column-design">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<?php echo $product['max_pasajeros'] ?>
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
						XX baños
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						Min- X dias
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
						Con Patron
					</div>
				</div>
			</div>
			<div class="description">
				<h3>Description</h3>
				<p><?php echo $product['descripcion_barco'] ?></p>
			</div>
		</div>
		<div class="white-box">
			<h4>Caracteristicas</h4>
			<ul>
				<li>Confort</li>
				<li>Wifi e internet</li>
				<li>Parking gratuito</li>
				<li>Panel solar</li>
				<li>Navegación: GPS</li>
				<li>Sonda: Auxiliar</li>
				<li>Piloto automático</li>
				<li>Motor fueraborda</li>
				<li>Hélice de pro</li>
				<li>Altavoces exteriores</li>
				<li>Desalinizador</li>
				<li>placa de cocina</li>
				<li>Nevera</li>
				<li>Congelador</li>
				<li>Fregadero</li>
				<li>Barbacoa</li>
				<li>Plancha de cocina</li>
			</ul>
		</div>
	</div>
</main>



