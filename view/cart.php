<link rel="stylesheet" href="assets/css/style_cart.css" />

<main class="cart-area">
	<h1>Carrito de la compra</h1>
	<div class="row-design">
		<div class="payment-info">
			<form onsubmit="alert('Pack pagado satisfactoriamente')">
				<div class="white-box address">
					<h2>Direccion de envio</h2>
					<div class="row-design">
						<input required type="text" class="form-control" placeholder="Direccion"/>
						<input type="text" class="form-control" placeholder="Mas datos sobre direccion"/>
					</div>
					<div class="row-design">
						<input required type="text" class="form-control" placeholder="Poblacion"/>
						<input required type="text" class="form-control" placeholder="Ciudad"/>
					</div>
					<div class="row-design">
						<input required type="number" class="form-control" placeholder="Codigo postal"/>
						<input required type="number" class="form-control" placeholder="Telefono"/>
					</div>
				</div>
				<div class="white-box payment">
					<h2>Datos de Pago</h2>
					<h5>Tipo: Visa</h5>
					<input require type="number" class="form-control" placeholder="Numero de tarjeta"/>
					<div class="row-design">
						<input required type="number" class="form-control" placeholder="mes"/>
						<input required type="number" class="form-control" placeholder="Año"/>
					</div>
					<div class="row-design">
						<input required type="text" class="form-control" placeholder="Nombre del titular"/>
						<input required type="number" class="form-control" placeholder="Codigo secreto"/>
					</div>
					<button type="submit" class="btn btn-success btn-block"/>pagar</button>
				</div>
			</form>
		</div>
		<div class="payment-item">
			<div class="white-box payment">
				<h2>Packs:</h2>
				<div class="product row-design">
					<div class="img-area">
						<img src="/assets/img/<?php echo $product['barco_imagen'] ?>" >
					</div>
					<div class="content-area column-design">
						<h3>Pack Nª <?php echo $product['barco_id'] ?></h3>
						<span><?php echo $product['descripcion_barco'] ?></span>
						<span><strong>Puerto <?php echo $product['puerto_id'] ?></strong></span>
						<span class="price"><?php echo $product['precio_pack'] ?>€</span>
					</div>
				</div>
				<h2 class="total">Total: <?php echo $product['precio_pack'] ?>€</h2>
			</div>
		</div>
	</div>
</main>



