//___________________________________________________________________________________________________________
    // FUNCIONES DE VALIDACIONES HTML
//___________________________________________________________________________________________________________
// funciones de validación nombre
function valNombreExp(event, valor, divPadre, divHijo, error){
    //debugger;
    $(divPadre).removeClass('error');
    $(divPadre).removeClass('validado');
    //expReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    expReg = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/;
    if(!expReg.test(valor)){
        event.preventDefault();
        $(divPadre).addClass('error');
        $(divHijo).removeClass('validando');
        //$(error).addClass('has-error');
        //$(error).html('<label class="control-label"><i class="fa fa-times-circle-o"></i> El nombre está mal. Ej: Entel Torre Arica</label>');
    }else{
        $(divPadre).removeClass('error');
        $(divPadre).addClass('validado');
        //$(error).removeClass('has-error');
        //$(error).addClass('has-success');
        //$(error).html('<label class="control-label"><i class="fa fa-check"></i> El nombre está OK</label>');
    }
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo
function valCorreoExp(event, valor, divPadre, divHijo, error){
    //debugger;
    $(divPadre).removeClass('error');
    $(divPadre).removeClass('validado');
    expReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if(!expReg.test(valor)){
        event.preventDefault();
        $(divPadre).addClass('error');
        $(divHijo).removeClass('validando');
        //$(error).addClass('has-error');
        //$(error).html('<label class="control-label"><i class="fa fa-times-circle-o"></i> El nombre está mal. Ej: Entel Torre Arica</label>');
    }else{
        $(divPadre).removeClass('error');
        $(divPadre).addClass('validado');
        //$(error).removeClass('has-error');
        //$(error).addClass('has-success');
        //$(error).html('<label class="control-label"><i class="fa fa-check"></i> El nombre está OK</label>');
    }
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo
function valTelefonoExp(event, valor, divPadre, divHijo, error){
    //debugger;
    $(divPadre).removeClass('error');
    $(divPadre).removeClass('validado');
    expReg = /^[0-9]+$/;
    if(!expReg.test(valor)){
        event.preventDefault();
        $(divPadre).addClass('error');
        $(divHijo).removeClass('validando');
        //$(error).addClass('has-error');
        //$(error).html('<label class="control-label"><i class="fa fa-times-circle-o"></i> El nombre está mal. Ej: Entel Torre Arica</label>');
    }else{
        $(divPadre).removeClass('error');
        $(divPadre).addClass('validado');
        //$(error).removeClass('has-error');
        //$(error).addClass('has-success');
        //$(error).html('<label class="control-label"><i class="fa fa-check"></i> El nombre está OK</label>');
    }
}
//___________________________________________________________________________________________________________
// funciones de validación nombre (método con información)
function validarNombre1(event){
    var valor = $('#nombreForm1').val();
    var divPadre = '.nombreForm1';
    var divHijo = '#nombreForm1';
    var error = '#errorNuevoValidacionPro';
    valNombreExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo (método con información)
function validarCorreo1(event){
    var valor = $('#correoForm1').val();
    var divPadre = '.correoForm1';
    var divHijo = '#correoForm1';
    var error = '#errorNuevoValidacionPro';
    valCorreoExp(event, valor, divPadre, divHijo, error);
}
//___________________________________________________________________________________________________________

//___________________________________________________________________________________________________________
// funciones de validación correo (método con información)
function validarTelefono1(event){
    var valor = $('#telefonoForm1').val();
    var divPadre = '.telefonoForm1';
    var divHijo = '#telefonoForm1';
    var error = '#errorNuevoValidacionPro';
    valTelefonoExp(event, valor, divPadre, divHijo, error);
}

$(document).ready(function(){
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (nombre)
    $("#nombreForm1").change(function(){
        validarNombre1(event);
    })
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (correo)
    $("#correoForm1").change(function(){
        validarCorreo1(event);
    })
    //___________________________________________________________________________________________________________
    // funcion para validar campos en vivo (teléfono)
    $("#telefonoForm1").change(function(){
        validarTelefono1(event);
    })
    // funcion para validar campos en vivo (todo)
    $("#btnLead1").click(function(){
        validarNombre1(event);
        validarCorreo1(event);
        validarTelefono1(event);
    })
});