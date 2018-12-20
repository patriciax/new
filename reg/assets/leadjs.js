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
		
		window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
		
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
   

