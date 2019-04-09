// variables de validación
var val1, val2, val3;

//___________________________________________________________________________________________________________
// FUNCIONES DE VALIDACIONES HTML
//___________________________________________________________________________________________________________
// funciones de validación nombre
function valNombreExp(event, valor, divPadre, divHijo, error) {
    //debugger;
    $(divPadre).removeClass('error');
    $(divPadre).removeClass('validado');
    $(divPadre).removeClass('validando');
    //expReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    expReg = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/;
    if (!expReg.test(valor)) {
        event.preventDefault();
        $(divPadre).addClass('error');
        $(divHijo).removeClass('validando');
        //$(error).addClass('has-error');
        //$(error).html('<label class="control-label"><i class="fa fa-times-circle-o"></i> El nombre está mal. Ej: Entel Torre Arica</label>');
        val1 = false;
    } else {
        $(divPadre).removeClass('error');
        $(divPadre).addClass('validado');
        //$(error).removeClass('has-error');
        //$(error).addClass('has-success');
        //$(error).html('<label class="control-label"><i class="fa fa-check"></i> El nombre está OK</label>');
        val1 = true;
    }
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo
function valCorreoExp(event, valor, divPadre, divHijo, error) {
    //debugger;
    $(divPadre).removeClass('error');
    $(divPadre).removeClass('validado');
    expReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (!expReg.test(valor)) {
        event.preventDefault();
        $(divPadre).addClass('error');
        $(divHijo).removeClass('validando');
        //$(error).addClass('has-error');
        //$(error).html('<label class="control-label"><i class="fa fa-times-circle-o"></i> El nombre está mal. Ej: Entel Torre Arica</label>');
        val2 = false;
    } else {
        $(divPadre).removeClass('error');
        $(divPadre).addClass('validado');
        //$(error).removeClass('has-error');
        //$(error).addClass('has-success');
        //$(error).html('<label class="control-label"><i class="fa fa-check"></i> El nombre está OK</label>');
        val2 = true;
    }
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo
function valTelefonoExp(event, valor, divPadre, divHijo, error) {
    //debugger;
    $(divPadre).removeClass('error');
    $(divPadre).removeClass('validado');
    expReg = /^[0-9]+$/;
    if (!expReg.test(valor)) {
        event.preventDefault();
        $(divPadre).addClass('error');
        $(divHijo).removeClass('validando');
        //$(error).addClass('has-error');
        //$(error).html('<label class="control-label"><i class="fa fa-times-circle-o"></i> El nombre está mal. Ej: Entel Torre Arica</label>');
        val3 = false;
    } else {
        $(divPadre).removeClass('error');
        $(divPadre).addClass('validado');
        //$(error).removeClass('has-error');
        //$(error).addClass('has-success');
        //$(error).html('<label class="control-label"><i class="fa fa-check"></i> El nombre está OK</label>');
        val3 = true;
    }
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación mensaje
function valMensajeExp(event, valor, divPadre, divHijo, error) {
    //debugger;
    $(divPadre).removeClass('error');
    $(divPadre).removeClass('validado');
    expReg = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/;
    if (!expReg.test(valor)) {
        event.preventDefault();
        $(divPadre).addClass('error');
        $(divHijo).removeClass('validando');
        //$(error).addClass('has-error');
        //$(error).html('<label class="control-label"><i class="fa fa-times-circle-o"></i> El nombre está mal. Ej: Entel Torre Arica</label>');
        val3 = false;
    } else {
        $(divPadre).removeClass('error');
        $(divPadre).addClass('validado');
        //$(error).removeClass('has-error');
        //$(error).addClass('has-success');
        //$(error).html('<label class="control-label"><i class="fa fa-check"></i> El nombre está OK</label>');
        val3 = true;
    }
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación nombre1 (método con información)
function validarNombre1(event) {
    var valor = $('#nombreForm1').val();
    var divPadre = '.nombreForm1';
    var divHijo = '#nombreForm1';
    var error = '#errorNuevoValidacionPro';
    valNombreExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo1 (método con información)
function validarCorreo1(event) {
    var valor = $('#correoForm1').val();
    var divPadre = '.correoForm1';
    var divHijo = '#correoForm1';
    var error = '#errorNuevoValidacionPro';
    valCorreoExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación teléfono1 (método con información)
function validarTelefono1(event) {
    var valor = $('#telefonoForm1').val();
    var divPadre = '.telefonoForm1';
    var divHijo = '#telefonoForm1';
    var error = '#errorNuevoValidacionPro';
    valTelefonoExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación nombre2 (método con información)
function validarNombre2(event) {
    var valor = $('#nombreForm2').val();
    var divPadre = '.nombreForm2';
    var divHijo = '#nombreForm2';
    var error = '#errorNuevoValidacionPro';
    valNombreExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo2 (método con información)
function validarCorreo2(event) {
    var valor = $('#correoForm2').val();
    var divPadre = '.correoForm2';
    var divHijo = '#correoForm2';
    var error = '#errorNuevoValidacionPro';
    valCorreoExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación teléfono1 (método con información)
function validarTelefono2(event) {
    var valor = $('#telefonoForm2').val();
    var divPadre = '.telefonoForm2';
    var divHijo = '#telefonoForm2';
    var error = '#errorNuevoValidacionPro';
    valTelefonoExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación teléfono1 (método con información)
function validarMensaje2(event) {
    var valor = $('#mensajeForm2').val();
    var divPadre = '.mensajeForm2';
    var divHijo = '#mensajeForm2';
    var error = '#errorNuevoValidacionPro';
    valMensajeExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

$(document).ready(function () {
    //___________________________________________________________________________________________________________
    // VALIDACIÓN DEL PRIMER FORMULARIO
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (nombre)
    $("#nombreForm1").change(function () {
        validarNombre1(event);
    })
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (correo)
    $("#correoForm1").change(function () {
        validarCorreo1(event);
    })
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (teléfono)
    $("#telefonoForm1").change(function () {
        validarTelefono1(event);
    })
    //___________________________________________________________________________________________________________

    //___________________________________________________________________________________________________________
    // VALIDACIÓN DEL SEGUNDO FORMULARIO
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (nombre)
    $("#nombreForm2").change(function () {
        validarNombre2(event);
    })
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (correo)
    $("#correoForm2").change(function () {
        validarCorreo2(event);
    })
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo superior (teléfono)
    $("#telefonoForm2").change(function () {
        validarTelefono2(event);
    })
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo superior (mensaje)
    $("#mensajeForm2").change(function () {
        validarMensaje2(event);
    })
    //___________________________________________________________________________________________________________

    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (todo)
    $("#btnLead1").click(function (event) {
        // primero se validan con métodos
        validarNombre1(event);
        validarCorreo1(event);
        validarTelefono1(event);

        if(val1 == false && val2 == false && val3 == false){
            console.log('error');
        }else{
            //debugger;
            var nombre   = $("#nombreForm1").val();
            var telefono = $("#telefonoForm1").val();
            var correo    = $("#correoForm1").val();
            var mensaje  = 'Lead de primera página';
            var datos = new FormData();
            datos.append('nombre', nombre);
            datos.append('telefono', telefono);
            datos.append('correo', correo);
            datos.append('mensaje', mensaje);
            
            $.ajax({
                url         : "ajax/mailform.ajax.php",
                method      : "POST",
                data        : datos,
                cache       : false,
                contentType : false,
                processData : false,
                dataType    : "json",
                success     : function(respuesta){
                    if(respuesta == true){
                        $('#transition').fadeOut(1000, function(){
                            //$('#transition').html('Nos pondremos en contacto');
                            $('#transition').html('Nos pondremos en contacto');
                            $('#transition').fadeIn(1000);
                            $('#transition').replaceWith('<h4 class="text-center" style="color: green; font-size: 25px" id="transition">¡Gracias! nos pondremos en contacto con usted</h4>');
                        });
                    }
                    
                    $("#nombreForm1").val('');
                    $("#telefonoForm1").val('');
                    $("#correoForm1").val('');
                }
            })
            // reninciar los marcadores
            vai1 = null;
            vai2 = null;
            vai3 = null;
        }
        // bloqueo del botón enviar
        event.preventDefault();
    })
    //___________________________________________________________________________________________________________    

    //___________________________________________________________________________________________________________    
    // funcion para validar campos en vivo formulario inferior (todo)
    $("#btnLead2").click(function (event) {
        // primero se validan con métodos
        validarNombre2(event);
        validarCorreo2(event);
        validarTelefono2(event);
        validarMensaje2(event);

        if(val1 == false && val2 == false && val3 == false){
            console.log('error');
        }else{
            //debugger;
            var nombre   = $("#nombreForm2").val();
            var telefono = $("#telefonoForm2").val();
            var correo   = $("#correoForm2").val();
            var mensaje  = $("#mensajeForm2").val();
            var datos = new FormData();
            datos.append('nombre', nombre);
            datos.append('telefono', telefono);
            datos.append('correo', correo);
            datos.append('mensaje', mensaje);
            
            $.ajax({
                url         : "ajax/mailform.ajax.php",
                method      : "POST",
                data        : datos,
                cache       : false,
                contentType : false,
                processData : false,
                dataType    : "json",
                success     : function(respuesta){
                    console.log('ok');
                    console.log(mensaje);
                }
            })
            // reninciar los marcadores
            vai1 = null;
            vai2 = null;
            vai3 = null;
        }

        // bloqueo del botón enviar
        event.preventDefault();
    })
    //___________________________________________________________________________________________________________    
    
});