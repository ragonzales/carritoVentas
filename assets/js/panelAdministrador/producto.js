        var MODULO = "MÓDULO DE PRODUCTOS";

$(document).ready(function () {
    ListarBanners();
    ObtenerHash();
});

function ObtenerHash() {
    var loc = window.location;
    var nombreHash = loc.hash.toUpperCase();
    switch(nombreHash){
        case "#INICIO" :
            ListarProductosPopulares();
            break;
        case "#BOCADITOS" :
            MostrarProductosXcategoria("BOCADITOS",1);
            break;
        case "#COMBOS" :
            MostrarProductosXcategoria("COMBOS",2);
            break;
        case "#CUPCKES" :
            MostrarProductosXcategoria("CUPCKES",3);
            break;
        case "#FESTIVO" :
            MostrarProductosXcategoria("FESTIVO",4);
            break;
        case "#POSTRES" :
            MostrarProductosXcategoria("TORTAS Y POSTRES",5);
            break;
        case "#COBERTURAS" :
            ListarCoberturas();
            break;
        default:
            ListarProductosPopulares();
            break;
    }
}

function ListarBanners() {
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarBanners',
        data: { },
        async: true,
        dataType: 'json',
        success: function (listaBanners) {
            if (listaBanners != null) {
                var bannerTexto = '';
                var contador = 0;                                
                listaBanners.forEach(function (banner) {
                    var active = '';
                    if(contador==0) 
                        active = 'active';

                    switch(parseInt(banner.alineacion)){
                        case 0:
                            bannerTexto += BannerIzquierda(banner,active);
                            break;

                        case 1:
                            bannerTexto += BannerIzquierda(banner,active);
                            break;

                        case 2:
                            bannerTexto += BannerDerecha(banner,active);
                            break;

                        case 3:
                            bannerTexto += BannerCentro(banner,active);
                            break;
                    }
                    contador++;
                });
                $("#dvBanner").append(bannerTexto);
            }
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO,'Error al listar los productos. Detalle Técnico : ' + errorThrown);
        }
    });
}

function BannerIzquierda(banner,active){
    var bannerTexto = '';
    bannerTexto += '<div class="item ' + active +'">';
    bannerTexto += '<img src="' + URL_PANEL_ADMIN + banner.rutafoto  +'" class="bg-cover-img" alt="" />';
    bannerTexto += '<div class="carousel-caption carousel-caption-left">';
    bannerTexto += '<div class="container">';
    bannerTexto += '<h3 class="title m-b-5 fadeInLeftBig animated">' + banner.titulo + '</h3> ';
    bannerTexto += '<p class="m-b-15 fadeInLeftBig animated">' + banner.descripcioncorta + '</p>';
    if(banner.mensaje != ""){
        bannerTexto += '<div class="price m-b-30 fadeInLeftBig animated"><span> ' + banner.mensaje + '</span></div>';    
    }
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    return bannerTexto;
}

function BannerDerecha(banner,active){
    var bannerTexto = '';
    bannerTexto += '<div class="item ' + active +'">';
    bannerTexto += '<img src="' + URL_PANEL_ADMIN + banner.rutafoto  +'" class="bg-cover-img" alt="" />';
    bannerTexto += '<div class="carousel-caption carousel-caption-right">';
    bannerTexto += '<div class="container">';
    bannerTexto += '<h3 class="title m-b-5 fadeInRightBig animated">' + banner.titulo + '</h3> ';
    bannerTexto += '<p class="m-b-15 fadeInRightBig animated">' + banner.descripcioncorta + '</p>';
    if(banner.mensaje != ""){
        bannerTexto += '<div class="price m-b-30 fadeInRightBig animated"><span>' + banner.mensaje + '</span></div>';
    }
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    return bannerTexto;
}

function BannerCentro(banner,active){
    var bannerTexto = '';
    bannerTexto += '<div class="item ' + active +'">';
    bannerTexto += '<img src="' + URL_PANEL_ADMIN + banner.rutafoto  +'" class="bg-cover-img" alt="" />';
    bannerTexto += '<div class="carousel-caption">';
    bannerTexto += '<div class="container">';
    bannerTexto += '<h3 class="title m-b-5 fadeInDownBig animated">' + banner.titulo + '</h3> ';
    bannerTexto += '<p class="m-b-15 fadeInDownBig animated">' + banner.descripcioncorta + '</p>';
    if(banner.mensaje != ""){
        bannerTexto += '<div class="price fadeInDownBig animated"><span>' + banner.mensaje + '</span></div>';
    }
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    return bannerTexto;
}

function ListarProductosPopulares() {
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarProductosPopulares',
        data: { },
        async: true,
        dataType: 'json',
        success: function (listaProductosPopulares) {
            if (listaProductosPopulares != null) {
                var productoTexto = '';
                listaProductosPopulares.forEach(function (producto) { 
                    productoTexto += AgregarProducto(producto);
                });
                $("#dvProductosPopulares").append(productoTexto);
                $( ".btnAgregarProducto").click(function() {
                    var IdProducto = $(this).attr("IdProducto");
                    var Idproductoproporcion = $("#PRODUCTO_"+ IdProducto).val();
                    var producto = BuscarProducto(IdProducto);  //Idproductoproporcion
                    var proporcion = BuscarProporcion(Idproductoproporcion);  //Idproductoproporcion
                    console.log(proporcion);                    
                    AgregarProductoCarritoVenta(producto, proporcion);
                });

                $("#dvProductosListado").hide();
                $("#dvIncio").show();
            }
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO,'Error al listar los productos populares. Detalle Técnico : ' + errorThrown);
        }
    });
}

function AgregarProducto(producto){
    var productoTexto = '';
    productoTexto += '<div class="col-md-3 col-sm-6">';
    productoTexto += '<div class="item item-thumbnail">';
    productoTexto += '<a class="item-image">';
    productoTexto += '<img src="' + producto.rutafoto  +'" onclick="DetalleProducto(' + producto.idproducto + ')" alt="' + producto.nombre  + '" />';
    if(producto.descuento.trim() != "")
    {
        productoTexto += '<div class="discount">' + producto.descuento + '% Descuento</div>';
    }
    productoTexto += '</a>';
    productoTexto += '<div class="item-info">';
    productoTexto += '<h4 class="item-title">';
    productoTexto += '<a onclick="DetalleProducto(' + producto.idproducto + ')">'+  producto.nombre + '</a>';
    productoTexto += '</h4>';
    // productoTexto += '<p class="item-desc">'+  producto.descripcioncorta + '</p>';
    productoTexto += BuscarProporciones(producto.idproducto);
    productoTexto += '</div>';
    productoTexto += '</div>';
    productoTexto += '</div>';
    return productoTexto;
}

function DetalleProducto(IdProducto){    
    var producto = BuscarProducto(IdProducto);
    var detalleProductoTexto = '';
    detalleProductoTexto += '<div class="row">';
    detalleProductoTexto += '<div class="col-md-12">';
    detalleProductoTexto += '<div class="col-md-6">';
    detalleProductoTexto += '<div class="item item-thumbnail">';
    detalleProductoTexto += '<a class="item-image">';
    detalleProductoTexto += '<img src="' + producto.rutafoto  +'" alt="' + producto.nombre  + '" />';
    if(producto.descuento.trim() != "")
    {
        detalleProductoTexto += '<div class="discount">' + producto.descuento + '% Descuento</div>';
    }
    detalleProductoTexto += '</a>';
    detalleProductoTexto += '</div>';
    detalleProductoTexto += '</div>';
    detalleProductoTexto += '<div class="col-md-6">';
    detalleProductoTexto += '<div class="item-info">';
    detalleProductoTexto += '<h4 class="item-title">';
    detalleProductoTexto += '<a>' +  producto.nombre + '</a>';
    detalleProductoTexto += '</h4>';
    detalleProductoTexto += '<p class="item-desc">' +  producto.descripcioncorta + '</p>';
    detalleProductoTexto += '<p class="item-desc">' +  producto.descripcionlarga + '</p>';
    detalleProductoTexto += '</div>';
    detalleProductoTexto += '</div>';
    detalleProductoTexto += '</div>';
    detalleProductoTexto += '</div>';

    $("#dvDetalleProducto").empty();
    $("#dvDetalleProducto").append(detalleProductoTexto);
    $('#modalProductos').modal('toggle');
}

function AgregarProporciones(IdProducto,listadoPoporciones){
    var productoTexto = '';
    var contador = 0;
    var precio = '0.00';
    
    if(listadoPoporciones.length > 0){
        productoTexto += '<select class="form-control" id="PRODUCTO_'+ IdProducto + '" onchange="CambiarPrecioProducto(this,'+ IdProducto +')">';    
        listadoPoporciones.forEach(function (proporcion) {
            if(contador==0){
                precio = proporcion.precio;
            }
            productoTexto += '<option value="'+ proporcion.idproductoproporcion + '"  precio="'+ proporcion.precio +'" >'+ proporcion.proporcion +'</option>';
            contador++;
        });
        productoTexto += '</select>';
        productoTexto += '<div class="item-price" id="dvPrecio_' + IdProducto  + '">S/. ' + precio +' </div>';
        productoTexto += '<button class="btn btn-inverse btn-lg btnAgregarProducto" type="submit" IdProducto="' + IdProducto + '"><i class="fa fa-shopping-cart"> AGREGAR </i></button>';
    }    
    return productoTexto;
}

function CambiarPrecioProducto(control,IdProducto){
    $("#dvPrecio_"+ IdProducto).empty();
    $("#dvPrecio_"+ IdProducto).append('S/. ' + $('option:selected', control).attr('precio'));
}

function BuscarProporciones(IdProducto) {
    var proporcionesTexto = '';
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProductoProporciones',
        data: {"IdProducto": IdProducto },
        async: false,
        dataType: 'json',
        success: function (listadoPoporciones) {
            proporcionesTexto = AgregarProporciones(IdProducto,listadoPoporciones);
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al listar las proporciones del producto. Detalle Técnico : ' + errorThrown);
        }
    });
    return proporcionesTexto;
}

function ListarProductos(CATEGORIA) {
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarProductos',
        data: { "categoria": CATEGORIA },
        async: true,
        dataType: 'json',
        success: function (listaProductos) {            
            if (listaProductos != null) {
                var productoTexto = '';
                $("#dvProductos").empty();
                listaProductos.forEach(function (producto) { 
                    productoTexto += AgregarProducto(producto);
                });
                $("#dvProductos").append(productoTexto);

                $(".btnAgregarProducto").click(function() {
                    var IdProducto = $(this).attr("IdProducto");
                    var Idproductoproporcion = $("#PRODUCTO_"+ IdProducto).val();
                    var producto = BuscarProducto(IdProducto);  //Idproductoproporcion
                    var proporcion = BuscarProporcion(Idproductoproporcion);  //Idproductoproporcion
                    console.log(proporcion);
                    AgregarProductoCarritoVenta(producto, proporcion);
                });
            }
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO,'Error al listar los productos. Detalle Técnico : ' + errorThrown);
        }
    });
}

function BuscarProducto(IdProducto) {
    var producto = null;
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProducto',
        data: {
            "IdProducto": IdProducto
        },
        async: false,
        dataType: 'json',
        success: function (datoProducto) {
            producto = datoProducto;
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al buscar el producto. Detalle Técnico : ' + errorThrown);
        }
    });
    return producto;
}

function BuscarProporcion(IdProporcion) {
    var proporcion = null;
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProporcion',
        data: {
            "IdProporcion": IdProporcion
        },
        async: false,
        dataType: 'json',
        success: function (datoProporcion) {
            proporcion = datoProporcion;
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al buscar la proporcion. Detalle Técnico : ' + errorThrown);
        }
    });
    return proporcion;
}

$( "#btnInicio" ).click(function() {
    ListarProductosPopulares();
});

$( ".btnBuscarListadoProductos" ).click(function() {
    var nombre = $(this).attr("nombre");
    var codigo = $(this).attr("codigo");
    MostrarProductosXcategoria(nombre,codigo);
});

function MostrarProductosXcategoria(nombre,categoria) {
    ListarProductos(categoria);
    $("#lblNombreProducto").text(nombre);
    $("#dvIncio").hide();
    $("#dvProductosListado").show();
}

function AgregarProductoCarritoVenta(producto, proporcion) {
    var texto = '';
    texto += '<li IdProporcion = "' + proporcion.idproductoproporcion + '"  id="dvProporcion'+ proporcion.idproductoproporcion +'" >';
    texto += '<div class="cart-item-image">';
    texto += '<img src="' + producto.rutafoto + '" alt="' + producto.nombre + '">';
    texto += '</div>';
    texto += '<div class="cart-item-info">';
    texto += '<h4>' + producto.nombre + '</h4>';
    texto += '<p class="price" id="dvPrecio"> S/ ' + proporcion.precio + ' la unidad </p>';
    // texto += '<h5><input type="number" name="cantidadProductos" min="1" max="1000" style="border :0px" value="1"> Unidades </h5>';  //producto.cantidad
    // texto += '<p class="price" id="dvPrecio">S/ </p><p class="price" id="dvPrecio">' + proporcion.precio + '</p>';
    texto += '</div>';
    texto += '<div class="cart-item-close">';
    texto += '<a href="#" data-toggle="tooltip" class="btnCerrar" proporcion ="'+ proporcion.idproductoproporcion  + '" data-title="Remove">&times;</a>';
    texto += '</div>';
    texto += '</li>';
    $("#menuCarritoVenta").append(texto);
    $("#txtCantidadProductos").text((parseFloat($("#txtCantidadProductos").text()) + 1));

    $( ".btnCerrar").click(function() {
        var IdProporcion = $(this).attr("proporcion");
        $("#dvProporcion"+ IdProporcion).remove();
        $("#txtCantidadProductos").text((parseFloat($("#txtCantidadProductos").text()) - 1));
    });

}

$("[type='number']").keypress(function (evt) {
    evt.preventDefault();
});

