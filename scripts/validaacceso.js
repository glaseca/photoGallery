function validaacceso(){

	var nombre = document.getElementById("user").value;
	var contrase�a = document.getElementById("pass").value;	

	while (nombre.substring(0,1) == ' ')  //Quita los espacios en blanco al principio de la cadena
	{
		nombre = nombre.substring(1, nombre.length);
		if(nombre.length == 0){
			alert("El campo 'nombre' no es v�lido porque s�lo conten�a espacios");
			return;
		}
	}
	while (nombre.substring(nombre.length-1, nombre.length) == ' ') //Quita los espacios en blanco al final de la cadena
	{
		nombre = nombre.substring(0,nombre.length-1);
	}
	
	while (contrase�a.substring(0,1) == ' ')
	{
		contrase�a = contrase�a.substring(1, contrase�a.length);
		if(contrase�a.length == 0){
			alert("El campo 'contrase�a' no es v�lido porque s�lo conten�a espacios");
			return;
		}
	}
	while (contrase�a.substring(contrase�a.length-1, contrase�a.length) == ' ')
	{
		contrase�a = contrase�a.substring(0,contrase�a.length-1);
	}
	
	if(nombre == ""){
		alert("Has dejado el campo 'nombre' vac�o");
		return;
	}
	if(contrase�a == ""){
		alert("Has dejado el campo 'contrase�a' vac�o");
		return;
	}
	
	document.getElementById("acceso").submit();
}