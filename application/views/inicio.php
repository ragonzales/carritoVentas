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

	<div id="dvProductosBuscados" class="section-container bg-silver" style="display:block">
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
<div class="section-container" id="dvDetalleCompra">
	<div class="container">
		<div class="checkout">
			<!-- <form action="checkout_info.html" method="POST" name="form_checkout"> -->
				<div class="checkout-header">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="step active" id="dvCarrito">
								<a href="#Carrito" id ="btnCarrito">
									<div class="number">0</div>
									<div class="info">
										<div class="title">Carrito</div>
										<div class="desc">Productos de la lista.</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="checkout-body" id="dvEnvioRecibo">
					<div class="table-responsive">
						
					</div>
				</div>

				<div class="checkout-footer">
					<a href="#" class="btn btn-white btn-lg pull-left">Seguir Comprando</a>
					<button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10" id="btnComprar" >COMPRAR</button>
				</div>
			<!-- </form> -->
		</div>
	</div>
</div>



<!--
	CARRITO DE COMPRAS
<div class="section-container" id="checkout-cart">
	<div class="container">
		<div class="checkout">
			<form action="checkout_info.html" method="POST" name="form_checkout">
				<div class="checkout-header">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="step active" id="dvCarrito">
								<a href="#Carrito" id ="btnCarrito">
									<div class="number">1</div>
									<div class="info">
										<div class="title">Carrito</div>
										<div class="desc">Productos de la lista.</div>
									</div>
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-3">
							<div class="step" id="dvEnvio">
								<a href="#Envio" id="btnEnvio">
									<div class="number">2</div>
									<div class="info">
										<div class="title">Envio</div>
										<div class="desc">Vivamus eleifend euismod.</div>
									</div>
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-3">
							<div class="step" id="dvRecibo">
								<a href="#Recibo" id="btnRecibo">
									<div class="number">3</div>
									<div class="info">
										<div class="title">Recibo</div>
										<div class="desc">Aenean ut pretium ipsum. </div>
									</div>
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-3">
							<div class="step" id="dvPago">
							<a href="#Pago" id="btnPago">
									<div class="number">4</div>
									<div class="info">
										<div class="title">Pago</div>
										<div class="desc">Curabitur interdum libero.</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="checkout-body" id="dvEnvioRecibo">
					<div class="table-responsive">
						<table class="table table-cart">
							<thead>
								<tr>
									<th>Productos</th>
									<th class="text-center">Precio</th>
									<th class="text-center">Cantidad</th>
									<th class="text-center">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="cart-product">
										<div class="product-img">
											<img src="../assets/img/product/product-iphone-6s-plus.png" alt="" />
										</div>
										<div class="product-info">
											<div class="title">iPhone 6s Plus 16GB (Silver)</div>
											<div class="desc">Delivers Tue 26/04/2016 - Free</div>
										</div>
									</td>
									<td class="cart-price text-center">$999.00</td>
									<td class="cart-qty text-center">
										<div class="cart-qty-input">
											<a href="#" class="qty-control left disabled" data-click="decrease-qty" data-target="#qty"><i class="fa fa-minus"></i></a>
											<input type="text" name="qty" value="1" class="form-control" id="qty" />
											<a href="#" class="qty-control right disabled" data-click="increase-qty" data-target="#qty"><i class="fa fa-plus"></i></a>
										</div>
										<div class="qty-desc">1 to max order</div>
									</td>
									<td class="cart-total text-center">
										$999.00
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>


				<div class="checkout-footer">
					<a href="#" class="btn btn-white btn-lg pull-left">Continue Shopping</a>
					<button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10">Checkout</button>
				</div>
			</form>
		</div>
	</div>
</div>
-->