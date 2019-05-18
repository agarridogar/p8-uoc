<link rel="stylesheet" href="assets/css/style_products.css" />

<main class="product-area">
<?php foreach($this->model_cat->infoBoat($_REQUEST['barco_id']) as $r):  ?>
	<div>
		<h1></h1>
		
		<div class="white-box column-design">
			<div class="header-products column-design">
				<div class="principal-box row-design">
					<div class="images column-design">
						<div class="principal">
							<!--<img src="https://assetshare.basspro.com/content/dam/bps-general-assets/web/2017/12760-search-term-landing-pages/images/tahoe-lifestyle.jpg"/>-->
							<img src="<?php echo $r->barco_imagen;?>" alt="" />
						</div>
						<div class="more-img row-plain">
							<img src="https://assetshare.basspro.com/content/dam/bps-general-assets/web/2017/12760-search-term-landing-pages/images/tahoe-lifestyle.jpg"/>
							<img src="https://assetshare.basspro.com/content/dam/bps-general-assets/web/2017/12760-search-term-landing-pages/images/tahoe-lifestyle.jpg"/>
							<img src="https://assetshare.basspro.com/content/dam/bps-general-assets/web/2017/12760-search-term-landing-pages/images/tahoe-lifestyle.jpg"/>
							<img src="https://assetshare.basspro.com/content/dam/bps-general-assets/web/2017/12760-search-term-landing-pages/images/tahoe-lifestyle.jpg"/>
						</div>
					</div>
					
					<div class="excerpt column-design">
						<p class="price">
						    Desde <?php echo $r->precio_pack; ?>€ / medio dia <br>
							Desde 900€ / dia <br>
							Desde 4000€ / semana <br>
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
						<?php echo $r->max_pasajeros; ?> plazas
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
						1 baño
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						Min 2 días
					</div>
					<div class="column-design">
						<span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
						Con Patrón
					</div>
				</div>
			</div>
			<div class="description">
				<h3>Descripción</h3>
				<p>
				<?php echo $r->descripcion_barco; ?>
				</p>
			</div>
		</div>
		<?php endforeach ?>
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



