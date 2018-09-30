var MODULO = "MÓDULO DE PRODUCTOS";

$(document).ready(function () {
    ListarBanners();
    ListarProductos();
    ListarProductosPopulares();
});

function ListarBanners() {
    var contador = 0;
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
    bannerTexto += '<div class="price m-b-30 fadeInLeftBig animated"><span> ' + banner.mensaje + '</span></div>';
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
    bannerTexto += '<div class="price m-b-30 fadeInRightBig animated"><span>' + banner.mensaje + '</span></div>';
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
    bannerTexto += '<div class="price fadeInDownBig animated"><span>' + banner.mensaje + '</span></div>';
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    bannerTexto += '</div>';
    return bannerTexto;
}

function ListarProductosPopulares() {
    var contador = 0;
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
                    productoTexto += AgregarProductoPopular(producto);
                });
                $("#dvProductosPopulares").append(productoTexto);
            }
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO,'Error al listar los productos populares. Detalle Técnico : ' + errorThrown);
        }
    });
}

function AgregarProductoPopular(producto){
    var productoTexto = '';
    productoTexto += '<div class="col-md-3 col-sm-6">';
    productoTexto += '<div class="item item-thumbnail">';
    productoTexto += '<a href="product_detail.html" class="item-image">';
    productoTexto += '<img src="' + URL_PANEL_ADMIN + producto.rutafoto  +'" alt="" />';
    // productoTexto += '<div class="discount">40% OFF</div>';
    productoTexto += '</a>';
    productoTexto += '<div class="item-info">';
    productoTexto += '<h4 class="item-title">';
    productoTexto += '<a href="product.html">'+  producto.nombre + '</a>';
    productoTexto += '</h4>';
    productoTexto += '<p class="item-desc">'+  producto.descripcioncorta + '</p>';
    productoTexto += AgregarProporciones(producto.idProducto);
    productoTexto += '<div class="item-price">$149.00</div>';
    productoTexto += '</div>';
    productoTexto += '</div>';
    productoTexto += '</div>';
    return productoTexto;
}

function AgregarProporciones(IdProducto){
    var prorporcion = '';
    prorporcion += '<select class="form-control">';
    prorporcion += '<option value="volvo">Volvo</option>';
    prorporcion += '<option value="saab">Saab</option>';
    prorporcion += '<option value="mercedes">Mercedes</option>';
    prorporcion += '<option value="audi">Audi</option>';
    prorporcion += '</select>';
    return prorporcion;
}


function ListarProductos() {
    var contador = 0;
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarProductos',
        data: { "categoria": CATEGORIA },
        async: true,
        dataType: 'json',
        success: function (listaProductos) {
            if (listaProductos != null) {
                listaProductos.forEach(function (producto) {                    
                    
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
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProducto',
        data: {
            "IdProducto": IdProducto
        },
        async: true,
        dataType: 'json',
        success: function (producto) {
            AsignarProducto(producto)
            BuscarProductoProporciones(IdProducto);
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al buscar el producto. Detalle Técnico : ' + errorThrown);
        }
    });
}

function BuscarProducto(IdProducto) {
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProducto',
        data: {
            "IdProducto": IdProducto
        },
        async: true,
        dataType: 'json',
        success: function (producto) {
            AsignarProducto(producto)
            BuscarProductoProporciones(IdProducto);
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al buscar el producto. Detalle Técnico : ' + errorThrown);
        }
    });
}

function BuscarProductoProporciones(IdProducto) {
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProductoProporciones',
        data: {
            "IdProducto": IdProducto
        },
        async: true,
        dataType: 'json',
        success: function (listadoPoporciones) {
            AsignarListadoProporciones(listadoPoporciones);
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al listar las proporciones del producto. Detalle Técnico : ' + errorThrown);
        }
    });
}