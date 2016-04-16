/* Código de Isaac García Delgado */

function getActiveStyleSheet() {
  //recorremos el DOM, buscando el primer estilo activo.
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled)
      return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1  && a.getAttribute("rel").indexOf("alt") == -1 && a.getAttribute("title"))
      return a.getAttribute("title");
  }
  return null;
}


//Código para cambiar el estilo y la cookie correspondiente al pulsar el enlace.

function estilo(titulo) {
    var arrayLink = document.getElementsByTagName("link");
    for(var i = 0; i < arrayLink.length; i++) {        
        // Sólo aquellas etiquetas link que hacen referencia a un estilo y que no sea para impresión.     
        if(arrayLink[i].getAttribute("rel") != null && arrayLink[i].getAttribute("rel").indexOf("stylesheet") != -1 && arrayLink[i].getAttribute("media") != "print") {
             // Si tiene título es un estilo preferido o alternativo, si no tiene título es un estilo predeterminado y siempre tiene que utilizarse.                  
            if(arrayLink[i].getAttribute("title") != null && arrayLink[i].getAttribute("title").length > 0) {
                if(arrayLink[i].getAttribute("title") == titulo){
                    arrayLink[i].disabled = false;
                    setCookie("estilopag", titulo, 365);
                }
                else
                    arrayLink[i].disabled = true;
            }
        }
    }
}

function setCookie(c_name, value, expiredays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + expiredays);
    var c_value=escape(value) + ((expiredays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;  
}

function getCookie(c_name) {
    if(document.cookie.length > 0) {
		c_start = document.cookie.indexOf(c_name + "=");
		if(c_start != -1) {
			c_start = c_start + c_name.length + 1;
			c_end = document.cookie.indexOf(";", c_start);			
			if(c_end == -1)
				c_end = document.cookie.length;			
			return unescape(document.cookie.substring(c_start, c_end));
		}
    }
    return "";
}

function leerEstilo() {  
  var cookie = getCookie("estilopag");  
  var title;  
  //Si no hay cookie inicial elegimos el estilo principal, si no buscamos el último que quedó activo.
  if((cookie == null) | (cookie == "")){
  	title = "Estilo principal";
	setCookie("estilopag", title, 365);	
  }else 
  	title = cookie ? cookie : getPreferredStyleSheet();
  //setActiveStyleSheet(title);
  estilo(title);
}

function guardarEstilo() {
  //Obtenemos el estilo actual y lo guardamos en la cookie.
  var title = getActiveStyleSheet();
  setCookie("estilopag", title, 365);
}