
   //genera la notificacion de error
   function mensaje(m, el){
	   var p = el.parentElement;
	   var message = p.lastElementChild;
	   
	   $(message).empty();
	   $(message).fadeIn(150).append(m);
	   $(message).delay(3000).fadeOut(150);
   }
   
   //detecta si el caracter es una letra
   function letra(c){
	   return c.toLowerCase()!=c.toUpperCase();
   }
   
   //VALIDACION DE LOS INPUTS DEL PRIMER CUESTIONARIO
function valida_envia(){      
    
	 $("#notification").stop();
	 $("#notification").clearQueue();
	 
	 var redcolor = '#e74c3c';
	 
	 var inputs = document.fvalida.getElementsByTagName("input");
	 for(var i = 0; i<inputs.length; i++){
			 inputs[i].style.backgroundColor = '#FFF';
	 }
	 
	//  fvalida.sexo.style.backgroundColor = '#FFF';
	//  fvalida.fecha_nac.style.backgroundColor = '#FFF';
    
	 



	
    if (document.fvalida.nombre.value.length==0){
       fvalida.nombre.style.backgroundColor = redcolor;
       document.fvalida.nombre.focus();
	   mensaje("Por favor rellenar el campo nombre", document.fvalida.nombre);
       return 0;
    }
	else if (document.fvalida.nombre.value.length>0){
		
		var nombreString = document.fvalida.nombre.value.replace(/ /g,'');
		
		for(i=0; i<nombreString.length; i++)			
			if(!isNaN(nombreString.charAt(i))){
				fvalida.nombre.style.backgroundColor = redcolor;
				document.fvalida.nombre.focus();
				mensaje("El campo nombre no debe llevar numeros", document.fvalida.nombre);
				return 0;
			}
	}
    
	if (document.fvalida.apellido.value.length==0){
       fvalida.apellido.style.backgroundColor = redcolor;
       document.fvalida.apellido.focus();
	   mensaje("Por favor rellenar el campo apellido", document.fvalida.apellido);
       return 0;
    }  
    else if (document.fvalida.apellido.value.length>0){
		var apellidoString = document.fvalida.apellido.value.replace(/ /g,'');
		
		for(i=0; i<apellidoString.length; i++)			
			if(!isNaN(apellidoString.charAt(i))){
				fvalida.apellido.style.backgroundColor = redcolor;
				document.fvalida.apellido.focus();
				mensaje("El campo nombre no debe llevar numeros", document.fvalida.apellido);
				return 0;
			}
	}
	
	if (document.fvalida.email.value.length==0){
       fvalida.email.style.backgroundColor = redcolor;
       document.fvalida.email.focus();
	   mensaje("Por favor rellenar el campo email, ejemplo: nombre@nombre.com", document.fvalida.email);
       return 0;
    }else if (document.fvalida.email.value.length>0){
		if(!document.fvalida.email.value.match(/@/g))
		{
			mensaje("Utilize el formato correcto, ejemplo: nombre@dominio.dns", document.fvalida.email);
			fvalida.email.style.backgroundColor = redcolor;
			document.fvalida.email.focus();
			return 0;
		}
		else
		{
			string1 = document.fvalida.email.value.split('@');
			stringv = string1[1];
			
			if(!stringv.match(/\./g)){
				mensaje("Utilize el formato correcto, ejemplo: nombre@nombre.dns", document.fvalida.email);
				fvalida.email.style.backgroundColor = redcolor;
				document.fvalida.email.focus();
				return 0;	
			}
			
		}
    }
 	/*
    if (document.fvalida.dni.value.length==0){
       fvalida.dni.style.backgroundColor = redcolor;
       document.fvalida.dni.focus();
	   mensaje("Por favor rellenar el campo DNI, ejemplo: 12345678A", document.fvalida.dni);
       return 0;
	   } else if (document.fvalida.dni.value.length>0&&document.fvalida.dni.value.length<9){
		   fvalida.dni.style.backgroundColor = redcolor;
		   document.fvalida.dni.focus();
		   mensaje("Utilize el formato correcto, el dni tiene 9 caracteres ejemplo: 12345678A", document.fvalida.dni);
		   return 0;
	   } else if (document.fvalida.dni.value.length==9)
	   {
			for(i=0; i<8; i++)
				if(isNaN(document.fvalida.dni.value.charAt(i))){
					fvalida.dni.style.backgroundColor = redcolor;
					document.fvalida.dni.focus();
					mensaje("Utilize el formato correcto, los primeros 8 digitos del dni son numeros ejemplo: 12345678A", document.fvalida.dni);
					return 0;
				}
				
			if(!letra(document.fvalida.dni.value.charAt(8))){
				fvalida.dni.style.backgroundColor = redcolor;
				document.fvalida.dni.focus();
					mensaje("El ultimo caracter del dni debe ser una letra, ejemplo: 12345678A", document.fvalida.dni);
					return 0;
			}
	   }*/
    //         	if (document.fvalida.sexo.value.length==0){
    //     fvalida.sexo.style.backgroundColor = redcolor;
    //     document.fvalida.sexo.focus();
    //     mensaje("Por favor seleccione un valor", document.fvalida.sexo);
	// 	return 0;
    // }   

    // if (document.fvalida.fecha_nac.value.length==0){
    //     fvalida.fecha_nac.style.backgroundColor = redcolor;
    //     document.fvalida.fecha_nac.focus();
	// 	mensaje("Por favor seleccione una fecha", document.fvalida.fecha_nac);
    //     return 0;
	// } 
	// else if (document.fvalida.fecha_nac.value.length > 0) {
	// 	var d = fvalida.fecha_nac.value.split('-');
	// 	var year = d[0];
	// 	var month = d[1];
	// 	var day = d[2];

	// 	today = new Date();
	// 	var maxyear = today.getFullYear()-100;
	// 	var minyear = today.getFullYear()-18;
	// 	var minmonth = today.getMonth()+1;
	// 	var minday = today.getDate();
		
	// 	if(year > minyear){
			
	// 		var edad = 18-(year-minyear);
				
	// 		if(edad>0){
	// 			fvalida.fecha_nac.style.backgroundColor = redcolor;
	// 			document.fvalida.fecha_nac.focus();
	// 			mensaje("Debes ser mayor de 18 años para participar", document.fvalida.fecha_nac);
	// 			return 0;
	// 		}
	// 		else if(edad<=0){
	// 			fvalida.fecha_nac.style.backgroundColor = redcolor;
	// 			document.fvalida.fecha_nac.focus();
	// 			mensaje("Introduzca una fecha valida por favor", document.fvalida.fecha_nac);
	// 			return 0;
	// 		}
	// 	}
		// else if(year == minyear){
		// 	if(month > minmonth){
		// 		fvalida.fecha_nac.style.backgroundColor = redcolor;
		// 		document.fvalida.fecha_nac.focus();
		// 		mensaje("Debes ser mayor de 18 años para participar", document.fvalida.fecha_nac);
		// 		return 0;
		// 	}
		// 	else if(month == minmonth){
		// 		if(day > minday){
		// 			fvalida.fecha_nac.style.backgroundColor = redcolor;
		// 			document.fvalida.fecha_nac.focus();
		// 			mensaje("Debes ser mayor de 18 años para participar", document.fvalida.fecha_nac);
		// 			return 0;
		// 		}
		// 	}
		// }
		// else if(year < maxyear){
		// 	fvalida.fecha_nac.style.backgroundColor = redcolor;
		// 	document.fvalida.fecha_nac.focus();
		// 	mensaje("Debes ser menor de 100 años para participar", document.fvalida.fecha_nac);
		// 	return 0;		
		// }
	// }
    

    if (document.fvalida.termin.checked) {
        document.fvalida.submit(); 
     }
    else{
        fvalida.termin.style.backgroundColor = redcolor;
        document.fvalida.termin.focus();
        mensaje("Por favor lea y acepte los terminos y condiciones", document.fvalida.termin);
	    return 0; 
     }  

     if (document.fvalida.termin2.checked) {
        //document.fvalida.submit(); 
     }
    // else{
    //     fvalida.termin2.style.backgroundColor = redcolor;
    //     document.fvalida.termin2.focus();
    //     mensaje("Por favor lea y acepte los terminos y condiciones", document.fvalida.termin2);
	//     return 0; 
    //  }  

   if (document.fvalida.nombre.value.length!=0){       
       document.fvalida.nombre.focus()
       cerrar();
       return 0;
    }   
    alert("Muchas gracias por enviar el formulario");
    //document.fvalida.submit();
} 
      
    function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }
        
	function cerrar() {
		div = document.getElementById('flotante');
		div.style.display = 'none';
		div = document.getElementById('flotante2');
		div.style.display = '';            
	}
	
	function form2valida(){
		
			 $("#notification").stop();
	 $("#notification").clearQueue();
		
			 var inputs = document.fvalida.getElementsByTagName("input");
	 for(var i = 0; i<inputs.length; i++){
			 inputs[i].style.backgroundColor = '#FFF';
	 }
		
		if (document.fvalida.codigo_postal.value.length==0){
			fvalida.codigo_postal.style.backgroundColor = '#e74c3c';
			document.fvalida.codigo_postal.focus();
			mensaje("Por favor rellenar el campo codigo postal", document.fvalida.codigo_postal);
			return 0;
		}
		else if(document.fvalida.codigo_postal.value.length>0){
			for(i=0; i<document.fvalida.codigo_postal.value.length; i++){			
				if(isNaN(document.fvalida.codigo_postal.value.charAt(i))){
					fvalida.codigo_postal.style.backgroundColor = '#e74c3c';
					document.fvalida.codigo_postal.focus();
					mensaje("El codigo postal no debe llevar letras", document.fvalida.codigo_postal);
					return 0;
				}
			}
		}
		
		if (document.fvalida.telefono.value.length==0){
			fvalida.telefono.style.backgroundColor = '#e74c3c';
			document.fvalida.telefono.focus();
			mensaje("Por favor rellenar el campo telefono", document.fvalida.telefono);
			return 0;
		}
		else if(document.fvalida.telefono.value.length>0 && document.fvalida.telefono.value.length<9){
			fvalida.telefono.style.backgroundColor = '#e74c3c';
			document.fvalida.telefono.focus();
			mensaje("El campo telefono debe tener 9 digitos, ejemplo: 612345678", document.fvalida.telefono);
			return 0;
		}
		else if(document.fvalida.telefono.value.length==9){
			if(document.fvalida.telefono.value.charAt(0)!=6 && document.fvalida.telefono.value.charAt(0)!=7){
				fvalida.telefono.style.backgroundColor = '#e74c3c';
				document.fvalida.telefono.focus();
				mensaje("El primer digito debe ser 6 o 7", document.fvalida.telefono);
				return 0;
			}
			else{
				for(i=0; i<document.fvalida.telefono.value.length; i++)			
				if(isNaN(document.fvalida.telefono.value.charAt(i))){
					fvalida.telefono.style.backgroundColor = '#e74c3c';;
					document.fvalida.telefono.focus();
					mensaje("El campo telefono no debe llevar letras", document.fvalida.telefono);
					return 0;
				}
			}
		}
		else if(document.fvalida.telefono.value.length>9){
			fvalida.telefono.style.backgroundColor = '#e74c3c';
			document.fvalida.telefono.focus();
			mensaje("El campo telefono debe tener 9 digitos, ejemplo: 612345678", document.fvalida.telefono);
			return 0;
		}
		
		//Aqui hace submit el formulario desde javascript
		document.fvalida.submit(); 
	}
	
	//cookies
	
	function getCookie(c_name){
  var c_value = document.cookie;
  var c_start = c_value.indexOf(" " + c_name + "=");
  if (c_start == -1){
    c_start = c_value.indexOf(c_name + "=");
  }
  if (c_start == -1){
    c_value = null;
  }else{
    c_start = c_value.indexOf("=", c_start) + 1;
    var c_end = c_value.indexOf(";", c_start);
    if (c_end == -1){
      c_end = c_value.length;
    }
    c_value = unescape(c_value.substring(c_start,c_end));
  }
  return c_value;
}

function setCookie(c_name,value,exdays){
  var exdate=new Date();
  exdate.setDate(exdate.getDate() + exdays);
  var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
  document.cookie=c_name + "=" + c_value;
}

if(getCookie('cookie_notice_accepted')!="true"){
  document.getElementById("barraaceptacion").style.display="block";
}
function PonerCookie(){
  setCookie('cookie_notice_accepted','true',365);
  document.getElementById("barraaceptacion").style.display="none";
}

//nose que es esto xD

 $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

//ajax

function objetoAjax(){
        var xmlhttp = false;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
 
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false; }
        }
 
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
          xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }
    function enviarDatos(){
 
     //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  nombre=document.formulario.nombre.value;
  email=document.formulario.email.value;  
 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "envia_mail.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
    //la función responseText tiene todos los datos pedidos al servidor
    if (ajax.readyState==4) {
      //mostrar resultados en esta capa
    divResultado.innerHTML = ajax.responseText
      //llamar a funcion para limpiar los inputs
    LimpiarCampos();
  }
 }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  //enviando los valores a registro.php para que inserte los datos
  ajax.send("nombre="+nombre+"&email="+email)
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.nuevo_empleado.cod_recurso.value="";
  document.nuevo_empleado.cargo_proy.value="";
  document.nuevo_empleado.act_primaria.value="";
  
  document.nuevo_empleado.hhestimada.value="";
  document.nuevo_empleado.fecha_asignacion.value="";
  document.nuevo_empleado.fecha_finalizacion.value="";
  
  document.nuevo_empleado.cod_asig_proy.value="";
  document.nuevo_empleado.cod_estatus_r.value="";
  
  document.nuevo_empleado.mod.value="";
   document.nuevo_empleado.cod_cliente.value="";
  
  document.nuevo_empleado.cod_recurso.focus();
}

//otras funciones

function activarBoton() {
    if(verificar()) {
        btnEnviar.disabled=false
    }
    else {
        btnEnviar.disabled=true
    }
}

function verificar() {
    if( nombre.value==="" )
        return false; 
    if( apellido.value==="" )
        return false;      
    if( email.value==="" )
        return false;
    if( dni.value==="" )
        return false; 
    return true;
}

var btnEnviar = document.getElementById("btnEnviar");
btnEnviar.disabled = true;
var nombre = document.fr.nombre;
var apellido = document.fr.apellido;
var email = document.fr.email;
var dni = document.fr.dni;
nombre.onkeyup = apellido.onkeyup = email.onkeyup = dni.onkeyup = activarBoton;

//valida email(?)

function validaemail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="<font color='green'>*";

}
else{
document.getElementById("msgemail").innerHTML="<font color='red'>*";

}
}