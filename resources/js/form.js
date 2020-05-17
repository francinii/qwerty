function enviarFormulario(url,lang){
    lang = (lang == "") ? 'es': lang;
    var nombre = $("#nombre").val();
    var correo = $("#correo").val();
    var mensaje = $("#mensaje").val();    
    var valnom = validarVacio(nombre);
    var valcor = validarVacio(correo);
    var valmen = validarVacio(mensaje);
    var valcor1 =validarCorreo(correo);
    url = url + "/mail.php"
    if(valnom && valcor && valmen && valcor1 ){
        var data = {
            "nombre" : nombre,
            "correo" : correo,
            "mensaje" : mensaje,
        };
        $.ajax({
            type:'POST',
            url: url,            
            dataType: "json", //text
            data:data,
            success: function(response) {              
            //  alert(response);                         
                if(response == 1){                  
                      (lang == 'es') ? $('#tituloMensaje').text("Enviado correctamente"):$('#tituloMensaje').text("The message has been sent successfully.");
                      (lang == 'es') ? $('#mensaje1').text("¡Gracias por contactarnos!"):$$('#mensaje1').text("Thank you for contact us!");
                      (lang == 'es') ? $('#mensaje2').text("¡Nos pondremos en contacto muy pronto!"):$('#mensaje2').text("We get in touch soon.");
                      $('#modal_alert').modal("show");     
                }else {
                    (lang == 'es') ? $('#tituloMensaje').text("Oops, ha ocurrido un error"):$('#tituloMensaje').text("Oops, an error has occurred ");
                    (lang == 'es') ? $('#mensaje1').text("¡Parece que tu mensaje no ha podido ser enviado!"):$('#mensaje1').text("It seems that your message was not sent correctly!");
                    $('#mensaje2').text("");
                    $('#modal_alert').modal("show");         
                  }                       
            },          
            error: function() {
                (lang == 'es') ? $('#tituloMensaje').text("Oops, ha ocurrido un error"):$('#tituloMensaje').text("Oops, an error has occurred ");
                (lang == 'es') ? $('#mensaje1').text("¡Parece que tu mensaje no ha podido ser enviado!"):$('#mensaje1').text("It seems that your message was not sent correctly!");
                $('#mensaje2').text("");
                $('#modal_alert').modal("show");           
            }
        }); 

        $('#nombre').val("");
        $('#correo').val("");
        $("#mensaje").val("");

    }  else {
        (lang == 'es') ?   $('#tituloMensaje').text("Los datos ingresados son incorrectos"): $('#tituloMensaje').text("The data is incorrect");
        (lang == 'es') ?    $('#mensaje1').text("¡Verifique que los datos ingresaso sean correctos, sin espacios vacíos, y con un formato de correo válido!") : $('#mensaje1').text("Verify the information is correct, without empty inputs, and with a valid mail format!");
        $('#mensaje2').text("");
        $('#modal_alert').modal("show"); 
        }
}


function validarVacio(valor) {
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        return false;
    }
      return true;
}

function validarCorreo(valor){
    if( !(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) ) {
        return false;
      }
    return true;
}


function language(lang){
    var data = {
        "lang" : lang,
    };
    url =window.location.href;
    $.ajax({
        type:'POST',
        url:url,            
        dataType: "text", 
        data:data,
        success: function(response) {  
            location.reload(true);           
                          
        },           
        error: function() {
                    
        }
    }); 

}
