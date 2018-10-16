var MODULO = "MÓDULO DE PRODUCTOS";
var LIMITE_INICIAL = 12;
var categoriaAnterior = 0;
var limit = LIMITE_INICIAL;
var categoriaNuevo = '';
var action = 'inactive';
var start = 0;

$(document).ready(function () 
{          
    ListadoURL();
});

function ListadoURL() {
    if(action == 'inactive')
    {
      action = 'active';
      InicializarURL();
    }

    $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() > $("#dvProductos").height() && action == 'inactive')
        {
            action = 'active';
            start = start + limit;
            setTimeout(function(){
                InicializarURL();
            }, 800);
        }
    });
}

function InicializarURL() {
    var loc = window.location;
    var nombreHash = loc.hash.toUpperCase();
    nombreLinkNuevo = nombreHash;

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

function ListadoURL_LINK(categoria) 
{
    LIMITE_INICIAL = 12;
    limit = LIMITE_INICIAL;
    action = 'inactive';
    start = 0;

    if(action == 'inactive')
    {
      action = 'active';
      ObtenerHash(categoria);
    }

    $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() > $("#dvProductos").height() && action == 'inactive')
        {
            action = 'active';
            start = start + limit;
            setTimeout(function(){
                ObtenerHash(categoria);
            }, 800);
        }
    });
}

function ObtenerHash(categoria) 
{

    switch(parseInt(categoria))
    {
        case 1:
            MostrarProductosXcategoria("BOCADITOS",1);
            break;
        
        case 2:
            MostrarProductosXcategoria("COMBOS",2);
            break;

        case 3:
            MostrarProductosXcategoria("CUPCKES",3);
            break;

        case 4:
            MostrarProductosXcategoria("FESTIVO",4);
            break;
        
        case 5:
            MostrarProductosXcategoria("TORTAS Y POSTRES",5);
            break;
    }
}

function ListarProductosPopulares() {
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarProductosPopulares',
        data: 
            { 
                "limit" :  limit,
                "start" :  start
            },
        cache: false,
        dataType: 'json',
        success: function (listaProductosPopulares) {
            if (listaProductosPopulares != null) 
            {
                if (listaProductosPopulares.length > 0) 
                {
                    var productoTexto = '';                
                    listaProductosPopulares.forEach(function (producto) { 
                        productoTexto += AgregarProducto(producto);
                    });
                    $("#dvProductosPopulares").append(productoTexto);
                    action = 'inactive';

                    $(".btnAgregarProducto").click(function(e)
                    {
                        e.preventDefault();
                        e.stopImmediatePropagation();
                        var IdProducto = $(this).attr("IdProducto");
                        var Idproductoproporcion = $("#PRODUCTO_"+ IdProducto).val();
                        var producto = BuscarProducto(IdProducto);
                        var proporcion = BuscarProporcion(Idproductoproporcion);
                        CarritoVenta(producto, proporcion);
                    });
                }
            }
            else
            {
                $("#dvProductosPopulares").empty();
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
    
    if(producto.nombre.length > 24){
        productoTexto += '<a onclick="DetalleProducto(' + producto.idproducto + ')"><center>'+  producto.nombre + '</center></a>';
    }else{
        productoTexto += '<a onclick="DetalleProducto(' + producto.idproducto + ')"><center>'+  producto.nombre + '</center></a>';
    }
    
    productoTexto += '<br>';
    productoTexto += '</h4>';
    productoTexto += '<p class="item-desc"><br></p>';   //producto.descripcioncorta 
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
        productoTexto += '<select class="form-control" id="PRODUCTO_'+ IdProducto + '" onchange="CambiarPrecioProducto(this,'+ IdProducto +')" style="text-align-last: center;" >';    
        listadoPoporciones.forEach(function (proporcion) {
            if(contador == 0){
                precio = proporcion.precio;
            }
            productoTexto += '<option value="'+ proporcion.idproductoproporcion + '"  precio="'+ proporcion.precio +'" >'+ proporcion.proporcion +'</option>';
            contador++;
        });
        productoTexto += '</select>';
        productoTexto += '<div class="item-price" id="dvPrecio_' + IdProducto  + '">S/. ' + number_format(precio,2) + ' </div>';              
        productoTexto += '<button id="IDCARRITO_' + IdProducto + '"  class="btn btn-inverse btn-lg btnAgregarProducto" type="submit" IdProducto="' + IdProducto + '"><i class="fa fa-shopping-cart"> AGREGAR </i></button>';
    }    
    return productoTexto;
}

function CambiarPrecioProducto(control,IdProducto){
    $("#dvPrecio_"+ IdProducto).empty();
    $("#dvPrecio_"+ IdProducto).append('S/. ' + number_format($('option:selected', control).attr('precio'),2));
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
        data: 
            { 
                "categoria": CATEGORIA,
                "limit" :  limit,
                "start" :  start
            },
        //async: true,
        cache: false,
        dataType: 'json',
        success: function (listaProductos) {            
            
            if (listaProductos != null) 
            {
                if (listaProductos.length > 0) 
                {
                    var productoTexto = '';
                    action = 'inactive';
                    listaProductos.forEach(function (producto) { 
                        productoTexto += AgregarProducto(producto);
                    });
                    $("#dvProductos").append(productoTexto);

                    $(".btnAgregarProducto").click(function(e)
                    {
                        e.preventDefault();
                        e.stopImmediatePropagation();
                        var IdProducto = $(this).attr("IdProducto");
                        var Idproductoproporcion = $("#PRODUCTO_"+ IdProducto).val();
                        var producto = BuscarProducto(IdProducto);
                        var proporcion = BuscarProporcion(Idproductoproporcion);
                        CarritoVenta(producto, proporcion);
                    });                    
                }
            }
            else
            {
                $("#dvProductos").empty();
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
    var categoria = $(this).attr("codigo");
    $("#lblNombreProducto").text(nombre);
    $("#dvProductos").empty();
    $("#dvIncio").hide();
    $("#dvProductosListado").show();
    ListadoURL_LINK(categoria);    
});

function MostrarProductosXcategoria(nombre,categoria) {
    ListarProductos(categoria);
    $("#lblNombreProducto").text(nombre);
    $("#dvIncio").hide();
    $("#dvProductosListado").show();
}

function AgregarProductoCarritoVenta(producto, proporcion) {

    var IdProporcion = proporcion.idproductoproporcion;
    var texto = '';
    texto += '<li class="menuCarritoClase" unidades="txtUnidadesProductos_' + IdProporcion + '" montoPrecio="' + proporcion.precio + '" IdCantidadProductos="txtCantidadProductos_' + IdProporcion + '"  IdProporcion = "' + IdProporcion + '"  id="dvProporcion_'+ IdProporcion +'" >';
    texto += '<div class="cart-item-image">';
    texto += '<img src="' + producto.rutafoto + '" alt="' + producto.nombre + '">';
    texto += '</div>';
    texto += '<div class="cart-item-info">';
    texto += '<h5>' + producto.nombre + '</h5>';
    texto += '<span class="total" id="txtCantidadProductos_'+ IdProporcion  + '"> 1 </span>';
    texto += '<span class="total" id="txtUnidadesProductos_'+ IdProporcion  + '"> unidad </span>';
    texto += '<p class="price" id="dvPrecio_"' + IdProporcion + '> S/ ' + proporcion.precio + ' la unidad </p>';    
    texto += '</div>';
    texto += '<div class="cart-item-close">';
    texto += '<a href="#" data-toggle="tooltip" id="btnCerrar_'+ IdProporcion +'" proporcion ="'+ IdProporcion  + '" data-title="Remove">&times;</a>';
    texto += '</div>';
    texto += '</li>';
    $("#menuCarritoVenta").append(texto);
    $("#txtCantidadProductos").text((parseFloat($("#txtCantidadProductos").text()) + 1));

    $( "#btnCerrar_" + IdProporcion).click(function() {
        var IdProporcion = $(this).attr("proporcion");
        $("#txtCantidadProductos_"+IdProporcion).text((parseFloat($("#txtCantidadProductos_"+IdProporcion).text()) - 1));

        if(parseFloat($("#txtCantidadProductos_" + IdProporcion).text()) == 0)
        {
            $("#dvProporcion_"+ IdProporcion).remove();
            $("#txtCantidadProductos").text((parseFloat($("#txtCantidadProductos").text()) - 1));
        }
        else
        {        
            if(parseFloat($("#txtCantidadProductos_" + IdProporcion).text()) == 0)
            {
                $("#txtUnidadesProductos_" + IdProporcion).text(' unidad');
            }else{
                $("#txtUnidadesProductos_" + IdProporcion).text(' unidades');
            }
        }
        CalcularMontos();
    });
}

function CarritoVenta(producto, proporcion) {
    var existeProducto = false;
    var IdCantidadProductos = 0;
    var IdProporcion = 0;
    var IdPrecio = 0;

    $( ".menuCarritoClase" ).each(function( index ) {
        IdProporcion = $( this ).attr("IdProporcion");
        IdCantidadProductos = $( this ).attr("IdCantidadProductos");
        IdUnidades = $( this ).attr("unidades");
        if(IdProporcion == proporcion.idproductoproporcion){
            CarritoVentaModificarCantidadPrductos(IdCantidadProductos,IdUnidades);
            existeProducto=true;
        }
    });
    
    if(!existeProducto){
        AgregarProductoCarritoVenta(producto,proporcion);        
    }
    CalcularMontos();
}

function CarritoVentaModificarCantidadPrductos(IdCantidadProductos,unidades){
    $("#"+IdCantidadProductos).text((parseFloat($("#"+IdCantidadProductos).text()) + 1));
    if(parseFloat($("#"+IdCantidadProductos).text()) == 1){
        $("#"+unidades).text(' unidad');
    }else{
        $("#"+unidades).text(' unidades');
    }
}

function CalcularMontos() {
    var precioTotal = 0.00;
    $( ".menuCarritoClase" ).each(function( index ) {
        var montoPrecio = $( this ).attr("montoPrecio");
        var IdCantidadProductos = $( this ).attr("IdCantidadProductos");
        precioTotal +=  (parseFloat(montoPrecio) * parseFloat($("#" + IdCantidadProductos).text()));
    });
    $("#lblMontoTotal").text(number_format(precioTotal),2);
}