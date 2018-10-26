<div id="dvVentas" style="display:block">
	<div id="dvIncio" style="display:block">
		<div id="promotions" class="section-container bg-white">
			<div class="container">
				<div class="row row-space-10">
					<div class="col-md-6">
						<div class="promotion promotion-lg bg-black-darker">
							<div class="promotion-image text-right promotion-image-overflow-bottom">
								<img src="../assets/img/product/product-iphone-se.png" alt="">
							</div>
							<div class="promotion-caption promotion-caption-inverse">
								<h4 class="promotion-title">PRODUCTOS PERSONALIZADOS</h4>
								<div class="promotion-price"><small>from</small> $299.00</div>
								<p class="promotion-desc">A big step for small.<br>A beloved design. Now with more to love.</p>
								<a href="#" class="promotion-btn btnColorAmarillo">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="trending-items" class="section-container bg-silver">
			<div class="container">
				<h4 class="section-title clearfix">
					PRODUCTOS POPULARES
				</h4>
				<div class="row row-space-10" id="dvProductosPopulares">
				</div>
			</div>
		</div>
	</div>

	<div id="dvProductosListado" class="section-container bg-silver" style="display:block">
		<div class="container">
			<h4 class="section-title clearfix">
				<label id="lblNombreProducto"></label>
			</h4>
			<div class="row row-space-10" id="dvProductos">
			</div>
		</div>
	</div>

	<div id="dvProductosBuscados" class="section-container bg-silver" style="display:none">
		<div class="container">
			<h4 class="section-title clearfix">
				<label id="lblNombreProductoBuscado">PRODUCTOS BUSCADOS</label>
			</h4> 
			<div class="row row-space-10" id="dvProductosBuscadosRegistro">
			</div>
		</div>
	</div>
</div>

<!-- DETALLE PRPODUCTOS -->
<div class="section-container" id="dvDetalleCompra" style="display:none">
	<div class="container">
		<div class="checkout">
			<!-- <form action="checkout_info.html" method="POST" name="form_checkout"> -->
				<div class="checkout-header">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="step active">
								<a href="#Carrito" id ="btnCarrito">
									<div class="number">0</div>
									<div class="info">
										<div class="title">CARRITO COMPRAS</div>
										<div class="desc">Productos agregados a la canasta de compras</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="checkout-body" id="dvCarrito">
				</div>
				<div class="checkout-footer">
					<a href="#" class="btn btn-white btn-lg pull-left">Seguir Comprando</a>
					<button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10" id="btnComprar" >COMPRAR</button>
				</div>
			<!-- </form> -->
		</div>
	</div>
</div>