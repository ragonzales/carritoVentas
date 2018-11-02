$( ".btnListadoServicios" ).click(function() {
    var nombreServicio = $(this).attr("nombre");    
    MostrarServicio(nombreServicio);
});

function MostrarServicio(nombreServicio) {
    var nombreDiv = ObtenerNombreDivServicio(nombreServicio);
    productosBuscado=false;
    OcultarServicios();
    ActivarPanelServicios();
    $(nombreDiv).show();
}

function ActivarPanelServicios() {
    $("#dvProductosBuscados").hide();
    $("#dvProductosListado").hide();    
    $("#dvDetalleCompra").hide();    
    $("#dvServicios").show();
    $("#promotions").hide();
    $("#dvIncio").hide();
    $("#slider").hide();    
}

function ObtenerNombreDivServicio(nombre){
    var nombreDiv = '';
    
    switch(nombre)
    {
        case "SERVICIO_CARITASPINTADAS":    
            nombreDiv = '#dvServicioCaritasPintadas';
            break;

        case "SERVICIO_COFFEBREAK":    
            nombreDiv = '#dvServicioCoffeBreak';
            break;

        case "SERVICIO_COMIDASEVENTOS":    
            nombreDiv = '#dvServicioComidaEventos';
            break;

        case "SERVICIO_DECORACION_Y_MENAJE":    
            nombreDiv = '#dvServicioDecoraciones';
            break;

        case "SERVICIO_DEGUSTACIONES":    
            nombreDiv = '#dvServicioDegustaciones';
            break;

        case "SERVICIO_MOZOS_Y_BARMAN":    
            nombreDiv = '#dvServicioBarmanyMozos';
            break;

        case "SERVICIO_SANCK_CART":    
            nombreDiv = '#dvServicioSnackCart';
            break;
    }    
    return nombreDiv;
}

function OcultarServicios() {
    $("#dvServicios").hide();
    $("#dvServicioCaritasPintadas").hide();
    $("#dvServicioCoffeBreak").hide();
    $("#dvServicioComidaEventos").hide();
    $("#dvServicioDecoraciones").hide();
    $("#dvServicioDegustaciones").hide();
    $("#dvServicioBarmanyMozos").hide();
    $("#dvServicioSnackCart").hide();
}