<!-- PROPUCTOS POPULARES Y  PRODUCTOS PERSONALIZADOS-->
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
					PRODUCTOS TENDENCIA
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
				PRODUCTOS BUSCADOS : <label id="lblNombreProductoBuscado"></label>
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

<!-- SERVICIOS -->
<div id="dvServicios" class="section-container bg-silver" style="display:none">
	
	<div id="dvServicioCaritasPintadas" style="display:none">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label>CARITAS PINTADAS</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/caritaspintadas.jpg" alt="Caritas Pintadas" />
								</div>
								<h3 class="text-inverse">CARITAS PINTADAS</h3>
								
								<p class="about-me-desc" align="justify">
									Es momento de engreír a los más pequeños de la casa. ¡Vamos directo a tu evento! Pídelo con 7 días de aticipación.</br></br>
									LLEVATE UN RECUERDO PARA TODA LA VIDA </br>
									TE REGALAMOS 3 FOTOS TAMAÑO JUMBO: 10 x 15 cm</br>
								</p> 

								<p class="about-me-desc" align="justify">
									Nuestro servicio dura 1 hora y 30 minutos y pueden ser atendidos hasta 25 niños. </br>
								</p>

								<p class="about-me-desc" align="justify">
									Además, te regalamos tres fotos jumbo de 10x15 cm</br>
									Tan solo por S/. 58 Aprovecha tambien nuestra oferta de 50 niños por S/. 100</br>
								</p> 

								<p class="about-me-desc" align="justify">		
									Nota: La reserva se debe hace con 3 días de anticipación</br>
								</p> 

							</div>
						</div>
						<div class="col-md-5">
							</br>
							<div class="section-container colorPlomo bd-example">
								<center><h4 class="section-title colorBlanco"><span>Formulario de cotizaciones y consultas</span></h4></center>
								<!-- <form> -->
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
										<button type="submit" class="form-control btn btn-primary colorAnaranjadoBoton">Enviar</button>
									</center>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dvServicioCoffeBreak" style="display:none">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label> COFFE BREAK</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/coffeebreak.jpg" alt="Coffe Break" />
								</div>
								<h3 class="text-inverse">COFEE BREAK</h3>
								<p class="about-me-desc" align="justify">
									Sorprende a tus invitados en tus reuniones ejecutivas o eventos sociales. Solicita tu cotización con 10 días de anticipación. Nuestro servicio incluye:  1 Mozo, fuentes, azafates, thermos, mantelería, servilletas, vasos, entre otros. No olvides que el pedido mínimo son para 30 personas.
								</p> 
							</div>
						</div>
						<div class="col-md-5">
							</br>
							<div class="section-container colorPlomo bd-example">
								<center><h4 class="section-title colorBlanco"><span>Formulario de cotizaciones y consultas</span></h4></center>
								<!-- <form> -->
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
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
										<button type="submit" class="form-control btn btn-primary colorAnaranjadoBoton">Enviar</button>
									</center>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dvServicioComidaEventos" style="display:none">
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
									<img src="<?php echo base_url();?>assets/img/services/comida-eventos.jpg" alt="Comida para eventos" />
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
								<!-- <form> -->
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
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
										<button type="submit" class="form-control btn btn-primary colorAnaranjadoBoton">Enviar</button>
									</center>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="dvServicioDecoraciones" style="display:none">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label>DECORACIONES Y MENAJE</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/decoraciones.jpg" alt="Decoraciones" />
								</div>
								<h3 class="text-inverse">DECORACIONES Y MENAJE</h3>
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
								<!-- <form> -->
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
										<button type="submit" class="form-control btn btn-primary colorAnaranjadoBoton">Enviar</button>
									</center>
								<!-- </form> -->
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

	<div id="dvServicioDegustaciones" style="display:none">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label>DEGUSTACIONES</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/degustaciones.png" alt="Degustaciones" />
								</div>
								<h3 class="text-inverse">DEGUSTACIONES</h3>
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
								<!-- <form> -->
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
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
										<label for="exampleSelect2">Uniformados</label>
										<select class="form-control" id="exampleSelect2">
											<option>Si</option>
											<option>No</option>
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
										<button type="submit" class="form-control btn btn-primary colorAnaranjadoBoton">Enviar</button>
									</center>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dvServicioBarmanyMozos" style="display:none">
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
								<!-- <form> -->
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
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
										<label for="exampleSelect2">Uniformados</label>
										<select class="form-control" id="exampleSelect2">
											<option>Si</option>
											<option>No</option>
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
										<button type="submit" class="form-control btn btn-primary colorAnaranjadoBoton">Enviar</button>
									</center>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dvServicioSnackCart" style="display:none">
		<div class="container">
			<center>
				<h2 class="text-inverse">
					<b><label> SNACK CART</label></b>
				</h2>
			</center>
			<div id="content" class="content">
				<div class="container">
					<div class="row row-space-30">
						<div class="col-md-7">
							<div class="section-container bd-example">
								<div class="post-image">
									<img src="<?php echo base_url();?>assets/img/services/snackCart.png" alt="Snack Cart" />
								</div>
								<h3 class="text-inverse">SNACK CART</h3>
								
								<p class="about-me-desc" align="justify">
									<b>¡Celebremos juntos con Dolce Salato!</b> Vamos directo a tu fiesta con nuestra casita rodante y te cocinamos lo que tu prefieras.</br>
								</p>

								<p class="about-me-desc" align="justify">
									Aquí te dejamos nuestra carta con algunas comidas con las que contamos. Escríbenos y pide tu cotización.</br>
								</p>

								<p class="about-me-desc" align="justify">
									Todos nuestros servicos incluyen: 1 Truck, fuentes, azafates y thermos, 2 colaboradores, servilletas, vasos, salsas, otros</br>         
		 							La reserva se hace con 10 días de anticipación</br>
								</p>
							</div>
						</div>
						<div class="col-md-5">
							</br>
							<div class="section-container colorPlomo bd-example">
								<center><h4 class="section-title colorBlanco"><span>Formulario de cotizaciones y consultas</span></h4></center>
								<!-- <form> -->
									<div class="form-group">
										<label for="exampleInputEmail1">Nombre o Empresa (*)</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre o Empresa">
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
										<button type="submit" class="form-control btn btn-primary colorAnaranjadoBoton">Enviar</button>
									</center>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- BEGIN #checkout-payment -->
<div class="section-container" id="checkout-info">
	<!-- BEGIN container -->
	<div class="container">
		<!-- BEGIN checkout -->
		<div class="checkout">
			<form class="form-horizontal">
				<!-- BEGIN checkout-header -->
				<div class="checkout-header">
					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-3 -->
						<div class="col-md-3 col-sm-3">
							<div class="step">
								<a href="checkout_cart.html">
									<div class="number">1</div>
									<div class="info">
										<div class="title">Carrito</div>
										<div class="desc">Lorem ipsum dolor sit amet.</div>
									</div>
								</a>
							</div>
						</div>
						<!-- END col-3 -->
						<!-- BEGIN col-3 -->
						<div class="col-md-3 col-sm-3">
							<div class="step active">
								<a href="#">
									<div class="number">2</div>
									<div class="info">
										<div class="title">Envio</div>
										<div class="desc">Vivamus eleifend euismod.</div>
									</div>
								</a>
							</div>
						</div>
						<!-- END col-3 -->
						<!-- BEGIN col-3 -->
						<div class="col-md-3 col-sm-3">
							<div class="step">
								<a href="checkout_payment.html">
									<div class="number">3</div>
									<div class="info">
										<div class="title">Recibo</div>
										<div class="desc">Aenean ut pretium ipsum. </div>
									</div>
								</a>
							</div>
						</div>
						<!-- END col-3 -->
						<!-- BEGIN col-3 -->
						<div class="col-md-3 col-sm-3">
							<div class="step">
								<a href="checkout_complete.html">
									<div class="number">4</div>
									<div class="info">
										<div class="title">Pago</div>
										<div class="desc">Curabitur interdum libero.</div>
									</div>
								</a>
							</div>
						</div>
						<!-- END col-3 -->
					</div>
					<!-- END row -->
				</div>
				<!-- END checkout-header -->


				<!-- BEGIN checkout-body -->
				<div class="checkout-body" id="dvPerzonalizarPedido">					
					<div class="form-group">
						<div class="col-md-12">
							<label class="col-md-12">
								<b>PERZONALIZA TU PEDIDO :</b>
							</label>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<label class="col-md-12">
								Su pedido incluye una dedicatoria y una tarjeta de regalo
							</label>
						</div>

						<div class="col-md-12">
							<div class="col-md-12">
								<!-- <input type="date" class="form-control" name="first_name" value="" placeholder=""  id="txtCumpleanosEnvio"/> -->
								<textarea class="form-control" rows="4" cols="50" maxlength="50"></textarea>
								Máximo 50 caracteres
							</div>
						</div>
					</div>
														
					<hr />
				</div>
				<!-- END checkout-body -->
				
				<!-- BEGIN checkout-body -->
				<div class="checkout-body" id="dvDatosCliente">					
					<div class="col-md-12">
						<label class="col-md-4">
							<b>DATOS DEL CLIENTE :</b>
						</label>
					</div>

					<div class="form-group">
						<div class="col-md-12">					
							<div class="col-md-6">
								<label class="control-label col-md-5">
									Nombres y Apellidos <span class="text-danger">*</span>
								</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="first_name" value="" placeholder="" id="txtNombreEnvio"/>
								</div>
							</div>

							<div class="col-md-6">
								<label class="control-label col-md-4">
									Cumpleaños <span class="text-danger">*</span>
								</label>
								<div class="col-md-8">
									<input type="date" class="form-control" name="first_name" value="" placeholder=""  id="txtCumpleanosEnvio"/>
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<div class="col-md-6">
								<label class="control-label col-md-5">
									Correo <span class="text-danger">*</span>
								</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="first_name" value="" placeholder="" id="txtCorreoEnvio" />
								</div>
							</div>

							<div class="col-md-6">
								<label class="control-label col-md-4">
									Teléfono <span class="text-danger">*</span>
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="first_name" value="" placeholder="" id="txtTelefonoEnvio"/>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<label class="col-md-4">
							<b>DATOS DEL ENVIO :</b>
						</label>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<div class="col-md-6">
								<label class="control-label col-md-5">
									Cupón
								</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="first_name" value="" placeholder="" id="txtCuponEnvio" />
								</div>
							</div>

							<div class="col-md-6">
								<label class="control-label col-md-4">
									Distrito <span class="text-danger">*</span>
								</label>
								<div class="col-md-8">
									<select class="form-control" id="cmbDistritoEnvio">
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<div class="col-md-6">
								<label class="control-label col-md-5">
									Dirección <span class="text-danger">*</span>
								</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="first_name" value="" placeholder="" id="txtDireccionEnvio"/>
								</div>
							</div>

							<div class="col-md-6">
								<label class="control-label col-md-4">
									Referencia <span class="text-danger"></span>
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="first_name" value="" placeholder="" id="txtReferenciaEnvio" />
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<div class="col-md-6">
								<label class="control-label col-md-5">
									Fecha de Entrega <span class="text-danger">*</span>
								</label>
								<div class="col-md-7">
									<input type="date" class="form-control" name="first_name" value="" placeholder="" id="txtFechaEntregaEnvio" />
								</div>
							</div>

							<div class="col-md-6">
								<label class="control-label col-md-4">
									Horario de Entrega <span class="text-danger">*</span>
								</label>
								<div class="col-md-8">
									<input type="time" class="form-control" name="first_name" value="" placeholder="" id="txtHorarioEntregaEnvio"/>
								</div>
							</div>
						</div>
					</div>
										
					<hr />
				</div>
				<!-- END checkout-body -->

				<!-- BEGIN checkout-body -->
				<div class="checkout-body" id="dvDatosRecibo">
					<div class="form-group">
						<div class="col-md-12">
							<b>DATOS DEL DOCUMENTO :</b></br></br>
						</div>

						<div class="col-md-12">
							<input type="radio" name="gender"> Boleta</br>
							<input type="radio" name="gender"> Factura</br></br>
						</div>

						<div class="col-md-4">
							<input type="text" class="form-control" name="first_name" value="" placeholder="Ingrese número de Documento" id="txtCuponEnvio" />
						</div>
					</div>										
					<hr />
				</div>
				<!-- END checkout-body -->

				<!-- BEGIN checkout-body -->
				<div class="checkout-body" id="dvDatosPago">
					<div class="form-group">
						<div class="col-md-12">
							<b>FORMA DE PAGO :</b></br></br>
						</div>

						<div class="col-md-12">
							<input type="radio" name="gender"> Tarjeta</br>
							<input type="radio" name="gender"> Depósito Bancario <b>(50% 0 100%, si se realiza el pago parcial, el monto faltante se realizará en efectivo o cualquier tarjeta Visa )</b></br></br>
							<b>Seleccione el banco de su preferencia</b></br>
						</div>

						<div class="col-md-4">
							<select class="form-control" id="exampleSelect2">
								<option>BCP</option>
								<option>INTERBANK</option>
							</select>
							</br>
						</div>

						<div class="col-md-12 divBordeadoBanco">
							</br>
							<b>Pasos a seguir:</b>															</br>
							1. Hacer el depósito a nombre de :												</br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Razón Social : 							</br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUC : 									</br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banco : 								</br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CTA Ahorro Corriente Soles : 			</br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCI :									</br>
							2. Enviar el voucher de transaccion a : 										</br>
							3. Nos contactaremos contigo luego de la validación								</br>
							</br>
						</div>
					</div>										
					<hr />
				</div>
				<!-- END checkout-body -->

				<!-- BEGIN checkout-body -->
				<div class="checkout-body">
					<div class="table-responsive">
						<table class="table table-cart">
							<thead>
								<tr>
									<th>Product Name</th>
									<th class="text-center">Price</th>
									<th class="text-center">Quantity</th>
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
				<!-- END checkout-body -->


				<!-- BEGIN checkout-footer -->
				<div class="checkout-footer">
					<a href="checkout_cart.html" class="btn btn-white btn-lg pull-left">Back</a>
					<button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10">Continue</button>
				</div>
				<!-- END checkout-footer -->
			<!-- </form> -->
		</div>
		<!-- END checkout -->
	</div>
	<!-- END container -->
</div>
<!-- END #checkout-info -->