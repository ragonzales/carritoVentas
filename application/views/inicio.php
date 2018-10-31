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
					<a href="javascript:;" class="btn btn-white btn-lg pull-left" id="btnSeguirComprando">Seguir Comprando</a>
					<button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10" id="btnComprar" >COMPRAR</button>
				</div>
			<!-- </form> -->
		</div>
	</div>
</div>


<div id="dvServicios" class="section-container bg-silver">
	<div id="dvServicioBarmanyMozos">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label> BARMAN Y MOZOS</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/mozos.jpg" alt="Mozos y Barman" />
								</div>
								<h3 class="text-inverse">MOZOS Y BARMAN</h3>
								<p class="about-me-desc" align="justify">
									La reserva se hace con una semana de anticipación.</br>
									Nuestro servicio incluye:	Movilidad	ida	y	vuelta,	Entrada, Plato de fondo, postre y bebida.
								</p> 
							</div>
						</div>
						<div class="col-md-5">
							</br>
							<div class="section-container colorPlomo bd-example">
							<center><h4 class="section-title colorBlanco"><span>Formulario de cotizaciones y consultas</span></h4></center>
								<form>
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
										<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">Teléfono (*)</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el Teléfono">
									</div>
									
									<div class="form-group">
										<label for="exampleInputPassword1">Correo electrónico (*)</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el Correo electrónico">
									</div>
									
									<div class="form-group">
										<label for="exampleSelect2">Servicios</label>
										<select class="form-control" id="exampleSelect2"><!--multiple-->
										<option>Mozos</option>
										<option>Barman</option>
										<option>Ambos</option>
										</select>
									</div>
									
									<div class="form-group">
										<label for="exampleTextarea">Número de Mozos</label>
										<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password" min="0" value="0">
									</div>

									<div class="form-group">
										<label for="exampleTextarea">Número de Barman</label>
										<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password" min="0" value="0">
									</div>

									<div class="form-group">
										<label for="exampleSelect2">Tipo Evento</label>
										<select class="form-control" id="exampleSelect2">
										<option>Si</option>
										<option>No</option>
										</select>
									</div>

									<div class="form-group">
										<label for="exampleSelect2">Uniformados</label>
										<select class="form-control" id="exampleSelect2">
										<option>Boda</option>
										<option>Quinceañero</option>
										<option>Fiesta Infantil</option>
										<option>Baby Shower</option>
										<option>Cocktails</option>
										<option>Aniversario</option>
										<option>Cumpleaños</option>
										<option>Conferencias</option>
										<option>Seminarios</option>
										<option>Ferias</option>
										<option>Otros</option>
										</select>
									</div>

									<div class="form-group">									
										<label for="exampleSelect2">Fecha del evento</label>
										<input type="date" class="form-control" id="start" name="trip" min="2018-01-01" max="2050-12-31" />
									</div>

									<div class="form-group">
										<label for="exampleTextarea">Número aproximado de invitados</label>
										<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password" min="0" value="0">
									</div>

									<div class="form-group">
										<label for="exampleTextarea">Descripción adicional</label>
										<textarea class="form-control" id="exampleTextarea" rows="4" placeholder="En caso de querer proporcionar informacion adicional, indíquela acá"></textarea>
									</div>

									<center>
										<button type="submit" class="form-control btn btn-primary colorAnaranjado">Enviar</button>
									</center>
								</form>
							</div>
							<!-- <div class="section-container">
								<h4 class="section-title"><span>Follow Us</span></h4>
								<ul class="sidebar-social-list">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dvServicioComidaEventos">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label> COMIDA PARA EVENTOS</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/comida-eventos.jpg" alt="Mozos y Barman" />
								</div>
								<h3 class="text-inverse">COMIDA PARA EVENTOS</h3>
								<p class="about-me-desc" align="justify">
									Nuestro servicio incluye:</br>
									Mínimo 20 platos</br>
									Movilidad ida y vuelta</br>
									Entrada, plato de fondo, postre y bebida</br>
								</p> 
							</div>
						</div>
						<div class="col-md-5">
							</br>
							<div class="section-container colorPlomo bd-example">
								<center><h4 class="section-title colorBlanco"><span>Formulario de cotizaciones y consultas</span></h4></center>
								<form>
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
										<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">Teléfono (*)</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el Teléfono">
									</div>
									
									<div class="form-group">
										<label for="exampleInputPassword1">Correo electrónico (*)</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el Correo electrónico">
									</div>
									
									<div class="form-group">
										<label for="exampleSelect2">Categoría</label>
										<select class="form-control" id="exampleSelect2"><!--multiple-->
											<option>Almuerzo Criollo</option>
											<option>Almuerzo Marino</option>
											<option>Almuerzo Italiano</option>
											<option>Almuerzo Internacional</option>
											<option>Almuerzo Oriental</option>
											<option>Almuerzo de la Sierra</option>
											<option>Almuerzo de la Selva</option>
											<option>Cena Navideña</option>
											<option>Chancho al Cilindro</option>
											<option>Caja Chino</option>
											<option>Parrillada</option>
										</select>
									</div>
									
									<div class="form-group">									
										<label for="exampleSelect2">Fecha del evento</label>
										<input type="date" class="form-control" id="start" name="trip" min="2018-01-01" max="2050-12-31" />
									</div>

									<div class="form-group">
										<label for="exampleTextarea">Número de personas</label>
										<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password" min="0" value="0">
									</div>

									<div class="form-group">
										<label for="exampleTextarea">Descripción adicional</label>
										<textarea class="form-control" id="exampleTextarea" rows="4" placeholder="En caso de querer proporcionar informacion adicional, indíquela acá"></textarea>
									</div>

									<center>
										<button type="submit" class="form-control btn btn-primary colorAnaranjado">Enviar</button>
									</center>
								</form>
							</div>
							<!-- <div class="section-container">
								<h4 class="section-title"><span>Follow Us</span></h4>
								<ul class="sidebar-social-list">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="dvServicioDecoraciones">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label> DECORACIONES</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/decoraciones.jpg" alt="Mozos y Barman" />
								</div>
								<h3 class="text-inverse">DECORACIONES</h3>
								<p class="about-me-desc" align="justify">
									<!-- Nuestro servicio incluye:</br>
									Mínimo 20 platos</br>
									Movilidad ida y vuelta</br>
									Entrada, plato de fondo, postre y bebida</br> -->

									<b>Te ofrecemos:</b></br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Arco trenzado de globos</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Columas de 1.5 mt de alto</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Cielo en globos de 30 unidades</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Margaritas o topiarios de globos</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Globos mini personalizados para decoración</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Gigantografia</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Nombre del cumpleañero</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Banderín “Mensaje personalizado”</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Muñecos hechos en globo según personaje</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Muñecos en tecnopor según personaje</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Bomboneras</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Porta chupetín</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Porta torta</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Porta vasos o cupcake</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Porta Retrato</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Pizarra de tiza</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Mantel</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Bandejas temáticas</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Cajas de torta temáticas</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Cajitas sorpresa temáticas</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Vasos temáticos</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Bolsas Temáticas</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Pompones en papel crepé</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Caja para regalos</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Envases de vidrio para bebidas</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Dulces y Golosinas (Normales o personalizados)</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Filmación del evento. Esto incluye: dos horas de duración, edición del video, CD recuerdo.</br>
									&nbsp;&nbsp;&nbsp;&nbsp;- Sesión Fotográfica: Cubrimos todo el evento</br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 30 fotos tamaño jumbo 10x15</br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 Fotos tamaño 13X18</br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 3 Fotos tamaño 15X20</br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 Fotos tamaño 20X30</br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- CD con las mejores fotos</br>
									<b>Nota:</b> Incluye movilidad ida y vuelta</br>
								</p> 
							</div>
						</div>
						<div class="col-md-5">
							</br>
							<div class="section-container colorPlomo bd-example">
								<center><h4 class="section-title colorBlanco"><span>Formulario de cotizaciones y consultas</span></h4></center>
								<form>
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
										<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">Teléfono (*)</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el Teléfono">
									</div>
									
									<div class="form-group">
										<label for="exampleInputPassword1">Correo electrónico (*)</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el Correo electrónico">
									</div>
									
									<div class="form-group">
										<label for="exampleSelect2">Tipo de decoración</label>
										<select class="form-control" id="exampleSelect2"><!--multiple-->
											<option>Decoreación básica para interior de casa o departamento</option>
											<option>Decoreación perzonalizada (Diseñada por el ciente)</option>
											<option>Decoreación completa de globos</option>
											<option>Decoreación temática infantil</option>
											<option>Decoreación temática adultos</option>
										</select>
									</div>
									
									<div class="form-group">									
										<label for="exampleSelect2">Fecha del evento</label>
										<input type="date" class="form-control" id="start" name="trip" min="2018-01-01" max="2050-12-31" />
									</div>

									<div class="form-group">
										<label for="exampleTextarea">Descripción adicional</label>
										<textarea class="form-control" id="exampleTextarea" rows="4" placeholder="En caso de querer proporcionar informacion adicional, indíquela acá"></textarea>
									</div>

									<center>
										<button type="submit" class="form-control btn btn-primary colorAnaranjado">Enviar</button>
									</center>
								</form>
							</div>
							<!-- <div class="section-container">
								<h4 class="section-title"><span>Follow Us</span></h4>
								<ul class="sidebar-social-list">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>