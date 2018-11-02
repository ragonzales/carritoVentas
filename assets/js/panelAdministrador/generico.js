$( document ).ready(function() {
    ListarBanners();
});

function ListarBanners() {
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Productos/ListarBanners',
        data: { },
        //async: true,
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
    bannerTexto += '<img src="' + banner.rutafoto  +'" class="bg-cover-img" alt="" />';
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
    bannerTexto += '<img src="' + banner.rutafoto  +'" class="bg-cover-img" alt="" />';
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
    bannerTexto += '<img src="' + banner.rutafoto  +'" class="bg-cover-img" alt="" />';
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


function validar_email(email)
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}

function MensajeAlert(titulo,mensaje){
    $.gritter.add({
        title: titulo,
        text: mensaje,
        sticky: false,
        class_name: 'my-sticky-class'
    });
}

function number_format(amount, decimals) {
    amount += '';
    amount = parseFloat(amount.replace(/[^0-9\.]/g, ''));
    decimals = decimals || 0;
    if (isNaN(amount) || amount === 0) return parseFloat(0).toFixed(decimals);  
    amount = '' + amount.toFixed(decimals);  
    var amount_parts = amount.split('.'),
    regexp = /(\d+)(\d{3})/;  
    while (regexp.test(amount_parts[0]))
        amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2'); 
    return amount_parts.join('.');
}

function validarDecimales(e,thix) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if (document.getElementById(thix.id).value.indexOf('.') != -1 && keynum == 46)
        return false;
    if ((keynum == 8 || keynum == 48 || keynum == 46))
        return true;
    if (keynum <= 47 || keynum >= 58) return false;
    return /\d/.test(String.fromCharCode(keynum));
}

function ReemplazoNulo(parametro) {
    var valor = '';
    if (parametro != null && parametro != undefined) valor = parametro;    
    return valor;
}

function ReemplazoNuloMonto(parametro) {
    var valor = 0;
    if (parametro != null && parametro != undefined) valor = parseFloat(parametro);    
    return valor;
}

function numeroFormato(num,cantidadCaracteres){
	numtmp='"'+num+'"';
	largo=numtmp.length-2;
	numtmp=numtmp.split('"').join('');
	if(largo==cantidadCaracteres)return numtmp;
	ceros='';
	pendientes=cantidadCaracteres-largo;
	for(i=0;i<pendientes;i++)ceros+='0';
	return ceros+numtmp;
}

$( "#btnBuscarCoberturas").click(function() {
    ListarCoberturas();
});

function ListarCoberturas(){
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Coberturas/ListarCoberturas',
        data: {},
        async: false,
        dataType: 'json',
        success: function (listadoCoberturas) {
            if (listadoCoberturas != null) {
                var texto = '';
                listadoCoberturas.forEach(function (cobertura) {                    
                    texto += AgregarCobertura(cobertura);
                });
                $("#dvDetalleCobertura").empty();
                $("#dvDetalleCobertura").append(texto);
            }
            $('#modalCoberturas').modal('toggle');
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al listar las coberturas. Detalle Técnico : ' + errorThrown);
        }
    });
}

function AgregarCobertura(cobertura){
    var coberturaTexto = '';
    coberturaTexto += '<div class="row">';
    coberturaTexto += '<div class="col-md-12">';
    coberturaTexto += cobertura.distrito + '</br>';
    coberturaTexto += '</div>';
    coberturaTexto += '</div>';
    return coberturaTexto;
}