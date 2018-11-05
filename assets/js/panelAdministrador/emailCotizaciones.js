$("#btnSuscribirse").click(function(e){
    var correoElectronico = $("#txtCorreoSuscripcion").val();
    if(validar_email(correoElectronico)){
        EnviarCorreoSuscripcion(correoElectronico);
    }else{
        console.log("Correo inválido");
    }
});

function EnviarCorreoSuscripcion(correoElectronico)
{
    $.ajax({
        type: "POST",
        url: BASE_URL + 'Correos/EnviarCorreoSuscripcion',
        data: {"correoElectronico": correoElectronico },
        async: false,
        dataType: 'json',
        success: function (dato) {
            console.log(dato);
            $("#txtCorreoSuscripcion").val('');
            alert('Se suscribió a la web');
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(jqXhr); console.log(textStatus); console.log(errorThrown);
            MensajeAlert(MODULO, 'Error al listar las proporciones del producto. Detalle Técnico : ' + errorThrown);
        }
    });
}