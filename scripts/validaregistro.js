function nombreposible(cadena) {
    var expresion = new RegExp("^[0-9a-zA-Z]{3,15}$");
    if(expresion.test(cadena))
		return 1;
	else
		return 0;
}

function passposible(cadena) {
    var expresion = new RegExp ("(?!^[0-9]+$)(?!^[a-zA-Z]+$)^([a-zA-Z0-9_]){6,15}$");
    if(expresion.test(cadena))
		return 1;
	else
		return 0;
}

function validaemail(cadena) {
	var expresion = new RegExp (/^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/);
    if(expresion.test(cadena))
		return 1;
	else
		return 0;
}

function validafecha(fecha)
{
	var expresion = new RegExp (/^\d{2}\-\d{2}\-\d{4}$/);
    if(expresion.test(fecha))
		return 1;
	else
		return 0;
}


function validaregistro()
{
  var user = document.getElementById("user").value;
  var pass = document.getElementById("pass").value;
  var pass2 = document.getElementById("pass2").value;
  var email = document.getElementById("email").value;
  var sexo = document.forms[0].sexo;
  var fecha = document.getElementById("bday").value;
  var semaforo = 0;
  
  if(nombreposible(user)==0){
	semaforo = 1;
	alert("Apodo incorrecto.");
  }
  if(validaemail(email)==0){
	semaforo = 1;
	alert("Email incorrecto.");	
  }
  if(passposible(pass)==0){
	semaforo = 1;
	alert("Pass incorrecta.");
  }
  if (pass!=pass2){
	semaforo = 1;
    alert("La contraseña y su repetición deben ser iguales.");
  }
  if (validasexo(sexo)==false) {
	semaforo = 1;
    alert("Debe seleccionar el sexo.");
	return;
  }
  if (validafecha(fecha)==false) {
	semaforo = 1;
    alert("Fecha incorrecta.");
  }
  if(semaforo == 0)
	document.getElementById("registro").submit();	
}


