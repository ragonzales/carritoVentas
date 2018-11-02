var MODULO = "MÓDULO DE PRODUCTOS";
// var LIMITE_INICIAL = 12;
// var categoriaAnterior = 0;
// var limit = LIMITE_INICIAL;
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

    /*
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
    */
}

/*
<li class="btnBuscarListadoProductos" codigo="1" nombre="POSTRES Y TORTAS"><a href="#POSTRES">POSTRES Y TORTAS</a></li>                                
<li class="btnBuscarListadoProductos" codigo="2" nombre="BOCADITOS SALADOS"><a href="#">BOCADITOS SALADOS</a></li>
<li class="btnBuscarListadoProductos" codigo="3" nombre="BOCADITOS DULCES"><a href="#BOCADITOSDULCES">BOCADITOS DULCES</a></li>
<li class="btnBuscarListadoProductos" codigo="4" nombre="PIQUEOS TRADICIONALES"><a href="#PIQUEOSTRADICIONALES">PIQUEOS TRADICIONALES</a></li>
<li class="btnBuscarListadoProductos" codigo="5" nombre="PIQUEOS PERUANOS"><a href="#PIQUEOSPERUANOS">PIQUEOS PERUANOS</a></li>                                

<li class="btnBuscarListadoProductos" codigo="6" nombre="CUPCKES TRADICIONALES"><a href="#CUPCKESTRADICIONALES">CUPCKES TRADICIONALES</a></li>
<li class="btnBuscarListadoProductos" codigo="7" nombre="CUPCKES GIGANTES"><a href="#CUPCKESGIGANTES">CUPCKES GIGANTES</a></li>
<li class="btnBuscarListadoProductos" codigo="8" nombre="COMBOS"><a href="#COMBOS">COMBOS</a></li>
<li class="btnBuscarListadoProductos" codigo="9" nombre="TENDENCIA"><a href="#TENDENCIA">TENDENCIA</a></li>
<li class="btnBuscarListadoProductos" codigo="10" nombre="FESTIVO"><a href="#FESTIVO">FESTIVO</a></li>
*/

function InicializarURL() {
    var loc = window.location;
    var nombreHash = loc.hash.toUpperCase();
    nombreLinkNuevo = nombreHash;

    switch(nombreHash){
        case "#INICIO" :
            ListarProductosPopulares();
            break;

        case "#POSTRES" :
            MostrarProductosXcategoria("POSTRES Y TORTAS",1);
            break;

        case "#BOCADITOSSALADOS" :
            MostrarProductosXcategoria("BOCADITOS SALADOS",2);
            break;
            
        case "#BOCADITOSDULCES" :
            MostrarProductosXcategoria("BOCADITOS DULCES",3);
            break;

        case "#PIQUEOSTRADICIONALES" :
            MostrarProductosXcategoria("PIQUEOS TRADICIONALES",4);
            break;

        case "#PIQUEOSPERUANOS" :
            MostrarProductosXcategoria("PIQUEOS PERUANOS",5);
            break;

        case "#CUPCKESTRADICIONALES" :
            MostrarProductosXcategoria("CUPCKES TRADICIONALES",6);
            break;

        case "#CUPCKESGIGANTES" :
            MostrarProductosXcategoria("CUPCKES GIGANTES",7);
            break;
            
        case "#COMBOS" :
            MostrarProductosXcategoria("COMBOS",8);
            break;

        case "#TENDENCIA" :
            //MostrarProductosXcategoria("TENDENCIA",9);
            ListarProductosPopulares();
            break;
        
        case "#FESTIVO" :
            MostrarProductosXcategoria("FESTIVO",10);
            break;

        case "#COBERTURAS" :
            ListarCoberturas();
            ListarProductosPopulares();
            break;

        case "#SNACKCART" :
            AbrirServicio("#SNACKCART");
            break;
        
        case "#CARITAS_PINTADAS" :
            AbrirServicio("#CARITASPINTADAS");
            break;
        
        case "#COFFE_BREAK" :
            AbrirServicio("#CARITASPINTADAS");
            break;
        
        case "#MOZOZ_BARMAN" :
            AbrirServicio("#MOZOZBARMAN");
            break;

        default:
            ListarProductosPopulares();
            break;
    }
}

function ListadoURL_LINK(categoria) 
{
    ObtenerHash(categoria);
    /*
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
    */
}

function ObtenerHash(categoria) 
{
    switch(parseInt(categoria))
    {
        case 1:
            MostrarProductosXcategoria("TORTAS Y POSTRES",categoria);
            break;
        
        case 2:
            MostrarProductosXcategoria("BOCADITOS SALADOS",categoria);
            break;

        case 3:
            MostrarProductosXcategoria("BOCADITOS DULCES",categoria);
            break;

        case 4:
            MostrarProductosXcategoria("PIQUEOS TRADICIONALES",categoria);
            break;
        
        case 5:
            MostrarProductosXcategoria("PIQUEOS PERUANOS",categoria);
            break;
        
        case 6:
            MostrarProductosXcategoria("CUPCKES TRADICIONALES",categoria);
            break;
        
        case 7:
            MostrarProductosXcategoria("CUPCKES GIGANTES",categoria);
            break;

        case 8:
            MostrarProductosXcategoria("COMBOS",categoria);
            break;

        case 9:
            MostrarProductosXcategoria("TENDENCIA",categoria);
            break;

        case 10:
            MostrarProductosXcategoria("FESTIVO",categoria);
            break;        
    }
}

function ListarProductosPopulares() {

    // data: 
    //         { 
    //             "limit" :  limit,
    //             "start" :  start
    //         },

    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarProductosPopulares',
        data: { },
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
        productoTexto += '<button id="IDCARRITO_' + IdProducto + '"  class="btn btn-inverse btn-lg btnAgregarProducto btnColorAmarillo" type="submit" IdProducto="' + IdProducto + '"><i class="fa fa-shopping-cart"> AGREGAR </i></button>';
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

    /*
        data: 
            { 
                "categoria": CATEGORIA,
                "limit" :  limit,
                "start" :  start
            },
    */

    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarProductos',
        data: { "categoria": CATEGORIA },
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

// $( "#btnInicio" ).click(function() {
//     debugger;
//     $("#dvProductosPopulares").empty();
//     ListarProductosPopulares();
//     $("#dvVentas").show();
//     $("#dvIncio").show();
//     $("#dvProductosListado").hide();
//     $("#dvProductosBuscados").hide();
//     $("#dvDetalleCompra").hide();
// });

$( ".btnBuscarListadoProductos" ).click(function() {
    var nombre = $(this).attr("nombre");
    var categoria = $(this).attr("codigo");
    $("#lblNombreProducto").text(nombre);
    $("#dvProductos").empty();
    $("#dvIncio").hide();
    $("#dvProductosBuscados").hide();
    $("#dvProductosBuscados").empty();
    $("#dvVentas").show();
    $("#slider").show();
    $("#dvProductosListado").show();
    $("#dvDetalleCompra").hide();
    debugger;
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
    texto += '<li class="menuCarritoClase"  unidades="txtUnidadesProductos_' + IdProporcion + '" montoPrecio="' + proporcion.precio + '" IdCantidadProductos="txtCantidadProductos_' + IdProporcion + '"  IdProporcion = "' + IdProporcion + '"  id="dvProporcion_'+ IdProporcion +'" >';
    texto += '<div class="cart-item-image">';
    texto += '<img src="' + producto.rutafoto + '" alt="' + producto.nombre + " - " +  proporcion.proporcion + '">';
    texto += '</div>';
    texto += '<div class="cart-item-info">';
    texto += '<h5>' + producto.nombre + " </br>" +  proporcion.proporcion + '</h5>';
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

$( "#btnBuscarProducto" ).click(function() {
    var nombreProducto = $("#txtNombreProducto_Busqueda").val();
    if(nombreProducto != ""){
        BuscarProductos_Nombre(nombreProducto);
        $("#txtNombreProducto_Busqueda").empty();
    }
});

function BuscarProductos_Nombre(nombreProducto)
{
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProductos_Nombre',
        data: {
            "nombreProducto": nombreProducto
        },
        async: false,
        dataType: 'json',
        success: function (listadoProductos) 
        {
            if (listadoProductos != null) 
            {
                if (listadoProductos.length > 0) 
                {
                    var productoTexto = '';
                    $("#dvIncio").hide();
                    $("#dvProductos").empty();
                    $("#dvProductosListado").hide();                  
                    $("#dvProductosBuscadosRegistro").empty();

                    listadoProductos.forEach(function (producto) { 
                        productoTexto += AgregarProducto(producto);
                    });
                    $("#dvProductosBuscadosRegistro").append(productoTexto);

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
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al buscar el producto. Detalle Técnico : ' + errorThrown);
        }
    });
}

$( "#btnVerDetalleCompra" ).click(function() {
    $("#dvVentas").hide();
    $("#slider").hide();    
    VerDetalleCarrito();
    $("#dvDetalleCompra").show();    
});

function ObjetoProporcion(Idproporcion,cantidad,unidades,montoPrecio)
{
    var proporcion = new Object();
    proporcion.Idproporcion = Idproporcion;
    proporcion.cantidad = cantidad;
    proporcion.unidades = unidades;
    proporcion.montoPrecio = montoPrecio;
    proporcion.proporcion = BuscarProporcion(Idproporcion);
    proporcion.producto = BuscarProductos_XProporcion(Idproporcion);
    return proporcion;
}

function VerDetalleCarrito() {
    var detalleCarrito = '';
    var listaCompra = [];
    var montoTotal = number_format(0,2);
    
    $("#dvCarrito").empty();
    $(".menuCarritoClase").each(function() {  //index
        var Idproporcion = $(this).attr("Idproporcion").trim();
        var cantidad = $("#"+$(this).attr("IdCantidadProductos")).text().trim();
        var unidades = $("#"+$(this).attr("unidades")).text().trim();
        var montoPrecio = $(this).attr("montoPrecio").trim();
        var proporcion = ObjetoProporcion(Idproporcion,cantidad,unidades,montoPrecio);
        //console.log(proporcion);
        listaCompra.push(proporcion);
    });
    
    detalleCarrito += '<div class="table-responsive">';
    detalleCarrito += '<table class="table table-cart">';
    detalleCarrito += '<thead>';
    detalleCarrito += '<tr>';
    detalleCarrito += '<th>PRODUCTOS</th>';
    detalleCarrito += '<th class="text-center">PRECIO</th>';
    detalleCarrito += '<th class="text-center">CANTIDAD</th>';
    detalleCarrito += '<th class="text-center">TOTAL</th>';
    detalleCarrito += '</tr>';
    detalleCarrito += '</thead>';
    detalleCarrito += '<tbody>';
    
    if(listaCompra.length > 0)
    {
        listaCompra.forEach(function (proporcion) 
        {
            var totalUnitarios = number_format(parseFloat(number_format(proporcion.montoPrecio,2)*(parseFloat(proporcion.cantidad))),2)
            var precioUnitario = number_format(parseFloat(proporcion.montoPrecio),2);

            detalleCarrito += '<tr>';
            detalleCarrito += '<td class="cart-product">';
            detalleCarrito += '<div class="product-img">';
            detalleCarrito += '<img src="' +proporcion.producto.rutafoto + '" alt="' + proporcion.producto.nombre + '" />';
            detalleCarrito += '</div>';
            detalleCarrito += '<div class="product-info">';
            detalleCarrito += '<div class="title">' + proporcion.producto.nombre + '</div>';
            detalleCarrito += '<div class="desc">' + proporcion.proporcion.proporcion  + '</div>';
            detalleCarrito += '</div>';
            detalleCarrito += '</td>';
            detalleCarrito += '<td class="cart-price text-center">S/. ' + precioUnitario  + '</td>';

            detalleCarrito += '<td class="cart-qty text-center">';
            detalleCarrito += '<div class="cart-qty-input">';
            //detalleCarrito += '<a href="javascript:void(0)" class="qty-control left disabled" id="btnMenos_"' + proporcion.Idproporcion  + ' data-click="decrease-qty" data-target="#qty_' +  proporcion.Idproporcion + '"><i class="fa fa-minus"></i></a>';
            detalleCarrito += '<input type="text" name="qty" value="'+ proporcion.cantidad + '" class="form-control" id="qty_' +  proporcion.Idproporcion + '" disabled/>';
            //detalleCarrito += '<a href="javascript:void(0)" class="qty-control right disabled" data-click="increase-qty" data-target="#qty_' +  proporcion.Idproporcion + '"><i class="fa fa-plus"></i></a>';
            detalleCarrito += '</div>';
            //detalleCarrito += '<div class="qty-desc"> </div>';
            detalleCarrito += '</td>';

            detalleCarrito += '<td class="cart-total text-center">';
            detalleCarrito += 'S/. ' + totalUnitarios;
            detalleCarrito += '</td>';
            detalleCarrito += '</tr>';
            montoTotal = parseFloat(montoTotal) + parseFloat(totalUnitarios);
        });
    }

    detalleCarrito += '<tr>';
    detalleCarrito += '<td class="cart-summary" colspan="4">';
    detalleCarrito += '<div class="summary-container">';
    detalleCarrito += '<div class="summary-row">';
    detalleCarrito += '<div class="field">SUBTOTAL</div>';
    detalleCarrito += '<div class="value">S/. ' + montoTotal + ' </div>';
    detalleCarrito += '</div>';
    detalleCarrito += '<div class="summary-row text-danger">';
    detalleCarrito += '<div class="field">Envio Gratis</div>';
    detalleCarrito += '<div class="value">S/. 0.00</div>';
    detalleCarrito += '</div>';
    detalleCarrito += '<div class="summary-row total">';
    detalleCarrito += '<div class="field">TOTAL</div>';
    detalleCarrito += '<div class="value">S/. ' + montoTotal + ' </div>';
    detalleCarrito += '</div>';
    detalleCarrito += '</div>';
    detalleCarrito += '</td>';
    detalleCarrito += '</tr>';

    detalleCarrito += '</tbody>';
    detalleCarrito += '</table>';
    detalleCarrito += '</div>';
    $("#dvCarrito").append(detalleCarrito);
}

function BuscarProductos_XProporcion(IdProporcion)
{
    var producto = null;
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/BuscarProductos_XProporcion',
        data: {
            "IdProporcion": IdProporcion
        },
        async: false,
        dataType: 'json',
        success: function (datoProducto) {
            producto = datoProducto;
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al buscar el producto mediante la proporcion. Detalle Técnico : ' + errorThrown);
        }
    });
    return producto;
}

function MostrarUltimaPantalla()
{
    $("#slider").show();
    $("#dvVentas").show();
    $("#dvDetalleCompra").hide();
}

$("#btnSeguirComprando").click(function(e){
    MostrarUltimaPantalla();
});

$("#btnInicioLogo").click(function(e){
    MostrarUltimaPantalla();
});


function PaginaInicio() {
    $("#dvProductosBuscados").hide();
    $("#dvProductosListado").hide();    
    $("#dvDetalleCompra").hide();    
    $("#dvServicios").hide();
    $("#dvIncio").show();
}

$("#btnPaginaInicio").click(function(e){
    PaginaInicio();
});
