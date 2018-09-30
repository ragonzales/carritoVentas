// $( document ).ready(function() {    
// });

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