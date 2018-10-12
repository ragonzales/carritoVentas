<div id="header" class="header">
    <div class="container">
        <div class="header-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-logo">
                    <a href="index.html">
                        <span class="brand"></span>
                        <span>Color</span>Admin
                        <small>e-commerce frontend theme</small>
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
                                <li class="btnBuscarListadoProductos" codigo="1" nombre="BOCADITOS"><a href="#BOCADITOS">BOCADITOS</a></li>
                                <li class="btnBuscarListadoProductos" codigo="2" nombre="COMBOS"><a href="#COMBOS">COMBOS</a></li>
                                <li class="btnBuscarListadoProductos" codigo="3" nombre="CUPCKES"><a href="#CUPCKES">CUPCKES</a></li>
                                <li class="btnBuscarListadoProductos" codigo="4" nombre="FESTIVO"><a href="#FESTIVO">FESTIVO</a></li>
                                <li class="btnBuscarListadoProductos" codigo="5" nombre="POSTRES Y TORTAS"><a href="#POSTRES">POSTRES Y TORTAS</a></li>
                            </ul>
                        </li>								
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                SERVICIOS ADICIONALES
                                <i class="fa fa-angle-down"></i> 
                                <span class="arrow top"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="product.html">Servicio 1</a></li>
                                <li><a href="product.html">Servicio 2</a></li>
                                <li><a href="product.html">Servicio 3</a></li>
                                <li><a href="product.html">Servicio 4</a></li>
                                <li><a href="product.html">Servicio 5</a></li>
                                <li><a href="product.html">Servicio 6</a></li>
                            </ul>
                        </li>                                               
                        <li id="btnBuscarCoberturas"><a href="#COBERTURAS">COBERTURA</a></li>
                        <li id="btnInicio"><a href="#INICIO">INICIO</a></li>
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-search search-btn"></i>
                                <span class="arrow top"></span>
                            </a>
                            <div class="dropdown-menu p-15">
                                <form action="search_results.html" method="POST" name="search_form">
                                    <div class="input-group">
                                        <input type="text" placeholder="Buscar Producto" class="form-control bg-silver-lighter" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
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
                            </div>
                            <div class="cart-body">
                                <ul class="cart-item" id="menuCarritoVenta">
                                    
                                </ul>
                            </div>
                            <div class="cart-footer">
                                <div class="row row-space-10">
                                    <div class="col-xs-12">
                                        <center>
                                            <h4>
                                            <b>MONTO MINIMO S/.20.00</b>
                                            </h4>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-footer">
                                <div class="row row-space-10">
                                    <div class="col-xs-6">
                                        <a href="checkout_cart.html" class="btn btn-default btn-block">View Cart</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="checkout_cart.html" class="btn btn-inverse btn-block">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>                            
                    <li>
                        <a href="my_account.html">
                            <!-- <img src="../assets/img/user/user-1.jpg" class="user-img" alt="" /> -->
                            <span class="hidden-md hidden-sm hidden-xs"></span>
                            <!-- Administrador -->
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