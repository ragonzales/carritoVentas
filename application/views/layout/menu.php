<div id="header" class="header">
    <div class="container">
        <div class="header-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <a href="javascript:;" id="btnInicioLogo">
                        <span class="brand"></span>
                        <img src="<?php echo base_url();?>assets/img/logo/logo.png" alt="Dolce Salato" />
                    </a>
                </div>
            </div>
            <div class="header-nav">
                <div class=" collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav">
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                CATEGORÍAS
                                <i class="fa fa-angle-down"></i>
                                <span class="arrow top"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="btnBuscarListadoProductos" codigo="1" nombre="POSTRES Y TORTAS"><a href="#POSTRES">POSTRES Y TORTAS</a></li>                                
                                <li class="btnBuscarListadoProductos" codigo="2" nombre="BOCADITOS SALADOS"><a href="#BOCADITOSSALADOS">BOCADITOS SALADOS</a></li>
                                <li class="btnBuscarListadoProductos" codigo="3" nombre="BOCADITOS DULCES"><a href="#BOCADITOSDULCES">BOCADITOS DULCES</a></li>
                                <li class="btnBuscarListadoProductos" codigo="4" nombre="PIQUEOS TRADICIONALES"><a href="#PIQUEOSTRADICIONALES">PIQUEOS TRADICIONALES</a></li>
                                <li class="btnBuscarListadoProductos" codigo="5" nombre="PIQUEOS PERUANOS"><a href="#PIQUEOSPERUANOS">PIQUEOS PERUANOS</a></li>                                
                                <li class="btnBuscarListadoProductos" codigo="6" nombre="CUPCKES TRADICIONALES"><a href="#CUPCKESTRADICIONALES">CUPCKES TRADICIONALES</a></li>
                                <li class="btnBuscarListadoProductos" codigo="7" nombre="CUPCKES GIGANTES"><a href="#CUPCKESGIGANTES">CUPCKES GIGANTES</a></li>
                                <li class="btnBuscarListadoProductos" codigo="8" nombre="COMBOS"><a href="#COMBOS">COMBOS</a></li>
                                <li class="btnBuscarListadoProductos" codigo="9" nombre="TENDENCIA"><a href="#TENDENCIA">TENDENCIA</a></li>
                                <li class="btnBuscarListadoProductos" codigo="10" nombre="FESTIVO"><a href="#FESTIVO">FESTIVO</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                SERVICIOS ADICIONALES
                                <i class="fa fa-angle-down"></i>
                                <span class="arrow top"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="btnListadoServicios" nombre="SERVICIO_CARITASPINTADAS"><a href="#SERVICIO_CARITASPINTADAS">CARITAS PINTADAS</a></li>
                                <li class="btnListadoServicios" nombre="SERVICIO_COFFEBREAK"><a href="#SERVICIO_COFFEBREAK">COFFE BREAK</a></li>
                                <li class="btnListadoServicios" nombre="SERVICIO_COMIDASEVENTOS"><a href="#SERVICIO_COMIDASEVENTOS">COMIDAS PARA EVENTOS</a></li>                                
                                <li class="btnListadoServicios" nombre="SERVICIO_DECORACION_Y_MENAJE"><a href="#SERVICIO_DECORACION_Y_MENAJE">DECORACION Y MENAJE</a></li>
                                <li class="btnListadoServicios" nombre="SERVICIO_DEGUSTACIONES"><a href="#SERVICIO_DEGUSTACIONES">DEGUSTACIONES</a></li>                                
                                <li class="btnListadoServicios" nombre="SERVICIO_MOZOS_Y_BARMAN"><a href="#SERVICIO_MOZOS_Y_BARMAN">MOZOS Y BARMAN</a></li>
                                <li class="btnListadoServicios" nombre="SERVICIO_SANCK_CART"><a href="#SERVICIO_SANCK_CART">SANCK CART</a></li>
                            </ul>
                        </li>
                        <li id="btnBuscarCoberturas"><a href="#COBERTURAS">COBERTURA</a></li>
                        <li id="btnPaginaInicio"><a href="#INICIO" >INICIO</a></li>
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-search search-btn"></i>
                                <span class="arrow top"></span>
                            </a>
                            <div class="dropdown-menu p-15">
                                <!-- <form action="search_results.html" method="POST" name="search_form"> -->
                                    <div class="input-group">
                                        <input type="text" placeholder="Buscar Producto" id="txtNombreProducto_Busqueda" class="form-control bg-silver-lighter" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-inverse btnColorAmarillo" type="submit" id="btnBuscarProducto"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown dropdown-hover">
                        <a href="#" class="header-cart" data-toggle="dropdown">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="total" id="txtCantidadProductos">0</span>
                            <span class="arrow top"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-cart p-0">
                            <div class="cart-header">
                                <h4 class="cart-title">TU PEDIDO</h4>
                                <a href="javascript:;" id="btnLimpiarCarritoCompras">Limpiar</a>
                            </div>
                            <div class="cart-body">
                                <ul class="cart-item" id="menuCarritoVenta">
                                </ul>
                            </div>
                            <div class="cart-footer">
                                <div class="row row-space-10">
                                    <div class="col-xs-12">
                                        <center>
                                            <h5>
                                            <b>MONTO MINIMO S/. 20.00</b>
                                            </h5>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-footer">
                                <div class="row row-space-10">
                                    <div class="col-xs-6">
                                        <a href="javascript:;" class="btn btn-default btn-block btnColorAmarillo" id="btnVerDetalleCompra">VER CARRITO</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="checkout_cart.html" class="btn btn-inverse btn-block">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a>
                            <span class="hidden-md hidden-sm hidden-xs">
                            <b>TOTAL S/. <label id="lblMontoTotal">0</label></b></h4>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalProductos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">DETALLE PRODUCTO</h4>
            </div>
            <div class="modal-body" id="dvDetalleProducto">

            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Cerrar</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCoberturas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">COBERTURAS</h4>
            </div>
            <div class="modal-body" id="dvDetalleCobertura">
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Cerrar</a>
            </div>
        </div>
    </div>
</div>