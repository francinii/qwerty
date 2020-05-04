function enviarFormulario(url){
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
            dataType: "text", 
            data:data,
            success: function(response) {              
            //  alert(response);                         
                  if(response == 1){                  
                      $('#tituloMensaje').text("Enviado correctamente");
                      $('#mensaje1').text("¡Gracias por contactarnos!");
                      $('#mensaje2').text("¡Nos pondremos en contacto muy pronto!");
                      $('#modal_alert').modal("show");                     

                  }else {
                      $('#tituloMensaje').text("Oops, ha ocurrido un error");
                      $('#mensaje1').text("¡Parece que tu mensaje no ha podido ser enviado!");
                      $('#mensaje2').text("");
                      $('#modal_alert').modal("show");         
                  }                       
            },           
            
            error: function() {
                $('#tituloMensaje').text("Oops, ha ocurrido un error");
                $('#mensaje1').text("¡Parece que tu mensaje no ha podido ser enviado!");
                $('#mensaje2').text("");
                $('#modal_alert').modal("show");           
            }
        }); 

        $('#nombre').val("");
        $('#correo').val("");
        $("#mensaje").val("");

    }  else {
        $('#tituloMensaje').text("Los datos ingresados son incorrectos");
                $('#mensaje1').text("¡Verifique que los datos ingresaso sean correctos, sin espacios vacíos, y con un formato de correo válido!");
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
