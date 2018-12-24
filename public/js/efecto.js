function ocultarmostrar(ocultar,mostrar){
    if(ocultar=='#form1'){  
        if(
            codigo.value=='' || codigo.value!='' && (codigo.value.length<3 || codigo.value.length>8) 
            || nombre.value=='' || (nombre.value!='' && nombre.value.length>32) 
            || descripcion.value=='' || (descripcion.value!='' && descripcion.value.length>32)     
            || nombre_responsable.value=='' || (nombre_responsable.value!='' && nombre_responsable.value.length>32)
            || email_responsable.value=='' || (email_responsable.value!='' && email_responsable.value.length>32) || !validarEmail(email_responsable.value)  
            || rfc_estacion.value=='' || (rfc_estacion.value!='' && rfc_estacion.value.length>16)
            || (nro_estacion.value!='' && nro_estacion.value.length>16)
            || (logo.value!='' && ($("#logo").width()>600 || $("#logo").height()>600 || !validarExtensiones(logo.value)))
            || (foto.value!='' && ($("#foto").width()>600 || $("#foto").height()>600 || !validarExtensiones(foto.value)))
        )
        {
            $('#msjs_error').show();
            $('#codigo_error').hide();$('#codigo_error_len').hide();
            $('#nombre_error').hide();$('#nombre_error_len').hide();
            $('#descripcion_error').hide();$('#descripcion_error_len').hide();            
            $('#nombre_responsable_error').hide();$('#nombre_responsable_error_len').hide();                                    
            $('#email_responsable_error').hide();$('#email_responsable_error_len').hide();$('#email_responsable_error_email').hide();            
            $('#rfc_estacion_error').hide();$('#rfc_estacion_error_len').hide();
            $('#nro_estacion_error_len').hide();
            $('#nroper_cre_error').hide();$('#nroper_cre_error_len').hide();            
            $('#logo_error_ancho').hide();$('#logo_error_alto').hide();$('#logo_error_extension').hide();
            $('#foto_error_ancho').hide();$('#foto_error_alto').hide();$('#foto_error_extension').hide();
        }
        if(codigo.value=='') {$('#codigo_error').show();document.getElementById('codigo').focus();return false;}
        if(codigo.value!='' && (codigo.value.length<3 || codigo.value.length>8)) {$('#codigo_error_len').show();document.getElementById('codigo').focus();return false;}
        if(nombre.value=='') {$('#nombre_error').show();document.getElementById('nombre').focus();return false;}
        if(nombre.value!='' && nombre.value.length>32) {$('#nombre_error_len').show();document.getElementById('nombre').focus();return false;}
        if(descripcion.value=='') {$('#descripcion_error').show();document.getElementById('descripcion').focus();return false;}
        if(descripcion.value!='' && descripcion.value.length>32) {$('#descripcion_error_len').show();document.getElementById('descripcion').focus();return false;}
        if(nombre_responsable.value=='') {$('#nombre_responsable_error').show();document.getElementById('nombre_responsable').focus();return false;}
        if(nombre_responsable.value!='' && nombre.value.length>32) {$('#nombre_responsable_error_len').show();document.getElementById('nombre_responsable').focus();return false;}
        if(email_responsable.value=='') {$('#email_responsable_error').show();document.getElementById('email_responsable').focus();return false;}
        if(email_responsable.value!='' && email_responsable.value.length>32) {$('#email_responsable_error_len').show();document.getElementById('email_responsable').focus();return false;}
        if(email_responsable.value!='' && email_responsable.value.length<=32) {if(!validarEmail(email_responsable.value)){$('#email_responsable_error_email').show();document.getElementById('email_responsable').focus();return false;}}
        if(rfc_estacion.value=='') {$('#rfc_estacion_error').show();document.getElementById('rfc_estacion').focus();return false;}
        if(rfc_estacion.value!='' && rfc_estacion.value.length>16) {$('#rfc_estacion_error_len').show();document.getElementById('rfc_estacion').focus();return false;}
        if(nro_estacion.value!='' && nro_estacion.value.length>16) {$('#nro_estacion_error_len').show();document.getElementById('nro_estacion').focus();return false;}
        if(nroper_cre.value=='') {$('#nroper_cre_error').show();document.getElementById('nroper_cre').focus();return false;}
        if(nroper_cre.value!='' && nroper_cre.value.length>16) {$('#nroper_cre_error_len').show();document.getElementById('nroper_cre').focus();return false;}
        if($("#logo").width()>600) {$('#logo_error_ancho').show();document.getElementById('logo').focus();return false;}
        if($("#logo").height()>600) {$('#logo_error_alto').show();document.getElementById('logo').focus();return false;}
        if(logo.value!='') {if(!validarExtensiones(logo.value)){$('#logo_error_extension').show();document.getElementById('logo').focus();return false;}}
        if($("#foto").width()>600) {$('#foto_error_ancho').show();document.getElementById('foto').focus();return false;}
        if($("#foto").height()>600) {$('#foto_error_alto').show();document.getElementById('foto').focus();return false;}
        if(foto.value!='') {if(!validarExtensiones(foto.value)){$('#foto_error_extension').show();document.getElementById('foto').focus();return false;}}

        $('#msjs_error').hide();
    }
    if(ocultar=='#form2'){  
        if(
            estado_id.value=='' || (estado_id.value!='' && estado_id.value.length>32)
            || municipio_id.value=='' || (municipio_id.value!='' && municipio_id.value.length>32)
            || entidad_federal_id.value=='' || (entidad_federal_id.value!='' && entidad_federal_id.value.length>32)
            || calle.value=='' || (calle.value!='' && calle.value.length>64)
            || colonia.value=='' || (colonia.value!='' && colonia.value.length>32)
            || codigo_postal.value=='' || (codigo_postal.value!='' && codigo_postal.value.length>5)
            || referencia1.value=='' || (referencia1.value!='' && referencia1.value.length>128)
            || referencia2.value=='' || (referencia2.value!='' && referencia2.value.length>128)
            || telefono1.value=='' || (telefono1.value!='' && telefono1.value.length>16)
            || telefono2.value=='' || (telefono2.value!='' && telefono2.value.length>16)
            || celular1.value=='' || (celular1.value!='' && celular1.value.length>16)
            || celular2.value=='' || (celular2.value!='' && celular2.value.length>16)
            || email_estacion.value=='' || (email_estacion.value!='' && email_estacion.value.length>32) || !validarEmail(email_estacion.value)      
            || sitioweb.value=='' || (sitioweb.value!='' && sitioweb.value.length>32)
        )
        {
            $('#msjs_error2').show();
            $('#estado_id_error_len').hide();
            $('#municipio_id_error_len').hide();
            $('#entidad_federal_id_error_len').hide();
            $('#calle_error_len').hide();
            $('#colonia_error_len').hide();
            $('#codigo_postal_error_len').hide();
            $('#referencia1_error_len').hide();
            $('#referencia2_error_len').hide();
            $('#telefono1_error_len').hide();
            $('#telefono2_error_len').hide();
            $('#celular1_error_len').hide();
            $('#celular2_error_len').hide();
            $('#email_estacion_error_len').hide();$('#email_estacion_error_email').hide();
            $('#sitioweb_error_len').hide();
        }
        if(estado_id.value!='' && estado_id.value.length>32) {$('#estado_id_error_len').show();document.getElementById('estado_id').focus();return false;}
        if(municipio_id.value!='' && municipio_id.value.length>32) {$('#municipio_id_error_len').show();document.getElementById('municipio_id').focus();return false;}
        if(entidad_federal_id.value!='' && entidad_federal_id.value.length>32) {$('#entidad_federal_id_error_len').show();document.getElementById('entidad_federal_id').focus();return false;}
        if(calle.value!='' && calle.value.length>64) {$('#calle_error_len').show();document.getElementById('calle').focus();return false;}
        if(colonia.value!='' && colonia.value.length>32) {$('#colonia_error_len').show();document.getElementById('colonia').focus();return false;}
        if(codigo_postal.value!='' && codigo_postal.value.length>5) {$('#codigo_postal_error_len').show();document.getElementById('codigo_postal').focus();return false;}
        if(referencia1.value!='' && referencia1.value.length>128) {$('#referencia1_error_len').show();document.getElementById('referencia1').focus();return false;}
        if(referencia2.value!='' && referencia2.value.length>128) {$('#referencia2_error_len').show();document.getElementById('referencia2').focus();return false;}
        if(telefono1.value!='' && telefono1.value.length>16) {$('#telefono1_error_len').show();document.getElementById('telefono1').focus();return false;}
        if(telefono2.value!='' && telefono2.value.length>16) {$('#telefono2_error_len').show();document.getElementById('telefono2').focus();return false;}
        if(celular1.value!='' && celular1.value.length>16) {$('#celular1_error_len').show();document.getElementById('celular1').focus();return false;}
        if(celular2.value!='' && celular2.value.length>16) {$('#celular2_error_len').show();document.getElementById('celular2').focus();return false;}
        if(email_estacion.value!='' && email_estacion.value.length>32) {$('#email_estacion_error_len').show();document.getElementById('email_estacion').focus();return false;}
        if(email_estacion.value!='' && email_estacion.value.length<=32) {if(!validarEmail(email_estacion.value)){$('#email_estacion_error_email').show();document.getElementById('email_estacion').focus();return false;}}        
        if(sitioweb.value!='' && sitioweb.value.length>32) {$('#sitioweb_error_len').show();document.getElementById('sitioweb').focus();return false;}

        $('#msjs_error2').hide();
    }
    if(ocultar=='#form3'){  
        if(
            nro_instrumento.value=='' || (nro_instrumento.value!='' && nro_instrumento.value.length>16)
            || notario_constitucion.value=='' || (notario_constitucion.value!='' && notario_constitucion.value.length>32)
            || ciudad_constitucion.value=='' || (ciudad_constitucion.value!='' && ciudad_constitucion.value.length>32)
            || nombre_replegal.value=='' || (nombre_replegal.value!='' && nombre_replegal.value.length>32)
            || nro_inst_replegal.value=='' || (nro_inst_replegal.value!='' && nro_inst_replegal.value.length>16)
            || notario_replegal.value=='' || (notario_replegal.value!='' && notario_replegal.value.length>32)
            || ciudad_replegal.value=='' || (ciudad_replegal.value!='' && ciudad_replegal.value.length>32)
        )
        {
            $('#msjs_error3').show();
            $('#nro_instrumento_error_len').hide();
            $('#notario_constitucion_error_len').hide();
            $('#ciudad_constitucion_error_len').hide();
            $('#nombre_replegal_error_len').hide();
            $('#nro_inst_replegal_error_len').hide();
            $('#notario_replegal_error_len').hide();
            $('#ciudad_replegal_error_len').hide();
        }
        if(nro_instrumento.value!='' && nro_instrumento.value.length>16) {$('#nro_instrumento_error_len').show();document.getElementById('nro_instrumento').focus();return false;}
        if(notario_constitucion.value!='' && notario_constitucion.value.length>32) {$('#notario_constitucion_error_len').show();document.getElementById('notario_constitucion').focus();return false;}
        if(ciudad_constitucion.value!='' && ciudad_constitucion.value.length>32) {$('#ciudad_constitucion_error_len').show();document.getElementById('ciudad_constitucion').focus();return false;}
        if(nombre_replegal.value!='' && nombre_replegal.value.length>32) {$('#nombre_replegal_error_len').show();document.getElementById('nombre_replegal').focus();return false;}
        if(nro_inst_replegal.value!='' && nro_inst_replegal.value.length>16) {$('#nro_inst_replegal_error_len').show();document.getElementById('nro_inst_replegal').focus();return false;}
        if(notario_replegal.value!='' && notario_replegal.value.length>32) {$('#notario_replegal_error_len').show();document.getElementById('notario_replegal').focus();return false;}
        if(ciudad_replegal.value!='' && ciudad_replegal.value.length>32) {$('#ciudad_replegal_error_len').show();document.getElementById('ciudad_replegal').focus();return false;}
        $('#msjs_error3').hide();
    }
    if(ocultar=='#form4'){
        if(
            nro_tanques_individuales.value=='' || (validarEntero(nro_tanques_individuales.value))
            || nro_tanques_compartidos.value=='' || (validarEntero(nro_tanques_compartidos.value))
            || capacidad_tanques.value=='' || (validarEntero(capacidad_tanques.value))
            || numero_islas.value=='' || (validarEntero(numero_islas.value))
            || numero_despachadores.value=='' || (validarEntero(numero_despachadores.value))
            || numero_empleados.value=='' || (validarEntero(numero_empleados.value))
            || estatus_estacion.value=='' || (validarEntero(estatus_estacion.value))
            || responsable_obra_diseno.value=='' || (responsable_obra_diseno.value!='' && responsable_obra_diseno.value.length>64)
            || numero_permiso_diseno.value=='' || (numero_permiso_diseno.value!='' && numero_permiso_diseno.value.length>16)
            || aditivo_gasolina1.value=='' || (aditivo_gasolina1.value!='' && aditivo_gasolina1.value.length>32)
            || aditivo_gasolina2.value=='' || (aditivo_gasolina2.value!='' && aditivo_gasolina2.value.length>32)
            || aditivo_diesel.value=='' || (aditivo_diesel.value!='' && aditivo_diesel.value.length>32)
            || forma_recepcion.value=='' || (forma_recepcion.value!='' && forma_recepcion.value.length>16)
            || promedio_mensual_ventas.value=='' || (validarEntero(promedio_mensual_ventas.value))
        )
        {
            $('#msjs_error4').show();
            $('#nro_tanques_individuales_error_num').hide();
            $('#nro_tanques_compartidos_error_num').hide();
            $('#capacidad_tanques_error_num').hide();
            $('#numero_islas_error_num').hide();
            $('#numero_despachadores_error_num').hide();
            $('#numero_empleados_error_num').hide();
            $('#estatus_estacion_error_num').hide();
            $('#responsable_obra_diseno_error_len').hide();
            $('#numero_permiso_diseno_error_len').hide();
            $('#aditivo_gasolina1_error_len').hide();
            $('#aditivo_gasolina2_error_len').hide();
            $('#aditivo_diesel_error_len').hide();
            $('#forma_recepcion_error_len').hide();
            $('#promedio_mensual_ventas_error_num').hide();            
        }
        if(validarEntero(nro_tanques_individuales.value)) {$('#nro_tanques_individuales_error_num').show();document.getElementById('nro_tanques_individuales').focus();return false;}
        if(validarEntero(nro_tanques_compartidos.value)) {$('#nro_tanques_compartidos_error_num').show();document.getElementById('nro_tanques_compartidos').focus();return false;}
        if(validarEntero(capacidad_tanques.value)) {$('#capacidad_tanques_error_num').show();document.getElementById('capacidad_tanques').focus();return false;}
        if(validarEntero(numero_islas.value)) {$('#numero_islas_error_num').show();document.getElementById('numero_islas').focus();return false;}
        if(validarEntero(numero_despachadores.value)) {$('#numero_despachadores_error_num').show();document.getElementById('numero_despachadores').focus();return false;}
        if(validarEntero(numero_empleados.value)) {$('#numero_empleados_error_num').show();document.getElementById('numero_empleados').focus();return false;}
        if(validarEntero(estatus_estacion.value)) {$('#estatus_estacion_error_num').show();document.getElementById('estatus_estacion').focus();return false;}
        if(responsable_obra_diseno.value!='' && responsable_obra_diseno.value.length>64) {$('#responsable_obra_diseno_error_len').show();document.getElementById('responsable_obra_diseno').focus();return false;}
        if(numero_permiso_diseno.value!='' && numero_permiso_diseno.value.length>16) {$('#numero_permiso_diseno_error_len').show();document.getElementById('numero_permiso_diseno').focus();return false;}
        if(aditivo_gasolina1.value!='' && aditivo_gasolina1.value.length>32) {$('#aditivo_gasolina1_error_len').show();document.getElementById('aditivo_gasolina1').focus();return false;}
        if(aditivo_gasolina2.value!='' && aditivo_gasolina2.value.length>32) {$('#aditivo_gasolina2_error_len').show();document.getElementById('aditivo_gasolina2').focus();return false;}
        if(aditivo_diesel.value!='' && aditivo_diesel.value.length>32) {$('#aditivo_diesel_error_len').show();document.getElementById('aditivo_diesel').focus();return false;}
        if(forma_recepcion.value!='' && forma_recepcion.value.length>16) {$('#forma_recepcion_error_len').show();document.getElementById('forma_recepcion').focus();return false;}
        if(validarEntero(promedio_mensual_ventas.value)) {$('#promedio_mensual_ventas_error_num').show();document.getElementById('promedio_mensual_ventas').focus();return false;}
        
        $('#msjs_error4').hide();
    }
    if(ocultar=='#form5'){
        if(
            superficie_total_predio.value=='' || (validarEntero(superficie_total_predio.value))
            || superficie_construccion.value=='' || (validarEntero(superficie_construccion.value))
            || numero_pisos.value=='' || (validarEntero(numero_pisos.value))
            || escaleras.value=='' || (validarEntero(escaleras.value))
            || bodega.value=='' || (validarEntero(bodega.value))
            || planta_electrica.value=='' || (validarEntero(planta_electrica.value))
            || compresor.value=='' || (validarEntero(compresor.value))
            || hidroneumaticos.value=='' || (validarEntero(hidroneumaticos.value))
            || numero_banos.value=='' || (validarEntero(numero_banos.value))
            || puestos_estacionamiento.value=='' || (validarEntero(puestos_estacionamiento.value))
            || puestos_estacionamiento_disc.value=='' || (validarEntero(puestos_estacionamiento_disc.value))
            || extintores.value=='' || (validarEntero(extintores.value))
            || surtidor_aire.value=='' || (validarEntero(surtidor_aire.value))
            || surtidor_agua.value=='' || (validarEntero(surtidor_agua.value))
        )
        {
            $('#msjs_error5').show();            
            $('#superficie_total_predio_error_num').hide();
            $('#superficie_construccion_error_num').hide();
            $('#numero_pisos_error_num').hide();
            $('#escaleras_error_num').hide();
            $('#bodega_error_num').hide();
            $('#planta_electrica_error_num').hide();
            $('#compresor_error_num').hide();
            $('#hidroneumaticos_error_num').hide();
            $('#numero_banos_error_num').hide();
            $('#puestos_estacionamiento_error_num').hide();
            $('#puestos_estacionamiento_disc_error_num').hide();
            $('#extintores_error_num').hide();
            $('#surtidor_aire_error_num').hide();
            $('#surtidor_agua_error_num').hide();            
        }
        if(validarEntero(superficie_total_predio.value)) {$('#superficie_total_predio_error_num').show();document.getElementById('superficie_total_predio').focus();return false;}
        if(validarEntero(superficie_construccion.value)) {$('#superficie_construccion_error_num').show();document.getElementById('superficie_construccion').focus();return false;}
        if(validarEntero(numero_pisos.value)) {$('#numero_pisos_error_num').show();document.getElementById('numero_pisos').focus();return false;}
        if(validarEntero(escaleras.value)) {$('#escaleras_error_num').show();document.getElementById('escaleras').focus();return false;}
        if(validarEntero(bodega.value)) {$('#bodega_error_num').show();document.getElementById('bodega').focus();return false;}
        if(validarEntero(planta_electrica.value)) {$('#planta_electrica_error_num').show();document.getElementById('planta_electrica').focus();return false;}
        if(validarEntero(compresor.value)) {$('#compresor_error_num').show();document.getElementById('compresor').focus();return false;}
        if(validarEntero(hidroneumaticos.value)) {$('#hidroneumaticos_error_num').show();document.getElementById('hidroneumaticos').focus();return false;}
        if(validarEntero(numero_banos.value)) {$('#numero_banos_error_num').show();document.getElementById('numero_banos').focus();return false;}
        if(validarEntero(puestos_estacionamiento.value)) {$('#puestos_estacionamiento_error_num').show();document.getElementById('puestos_estacionamiento').focus();return false;}
        if(validarEntero(puestos_estacionamiento_disc.value)) {$('#puestos_estacionamiento_disc_error_num').show();document.getElementById('puestos_estacionamiento_disc').focus();return false;}
        if(validarEntero(extintores.value)) {$('#extintores_error_num').show();document.getElementById('extintores').focus();return false;}
        if(validarEntero(surtidor_aire.value)) {$('#surtidor_aire_error_num').show();document.getElementById('surtidor_aire').focus();return false;}
        if(validarEntero(surtidor_agua.value)) {$('#surtidor_agua_error_num').show();document.getElementById('surtidor_agua').focus();return false;}       
        $('#msjs_error5').hide();
    }
    $(ocultar).hide();
    
    $(mostrar).show();
}

function validarEmail(valor) {
  if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
   return true;
  } else {
   return false;
  }
}


function validarExtensiones(archivo) {
    var extensiones_permitidas = new Array(".jpg", ".jpeg", ".png"); 
    var extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
    var permitida = false;
    for (var i = 0; i < extensiones_permitidas.length; i++) {
       if (extensiones_permitidas[i] == extension) {
       return true;
       }
    }
    return false;
}      


function validarEntero(campo) {
   if (isNaN(parseInt(campo.value))) {
     return false; //no es entero
   }  
   return true
}