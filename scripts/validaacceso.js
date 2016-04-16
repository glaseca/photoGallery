function validaacceso(){

	var nombre = document.getElementById("user").value;
	var contraseña = document.getElementById("pass").value;	

	while (nombre.substring(0,1) == ' ')  //Quita los espacios en blanco al principio de la cadena
	{
		nombre = nombre.substring(1, nombre.length);
		if(nombre.length == 0){
			alert("El campo 'nombre' no es válido porque sólo contenía espacios");
			return;
		}
	}
	while (nombre.substring(nombre.length-1, nombre.length) == ' ') //Quita los espacios en blanco al final de la cadena
	{
		nombre = nombre.substring(0,nombre.length-1);
	}
	
	while (contraseña.substring(0,1) == ' ')
	{
		contraseña = contraseña.substring(1, contraseña.length);
		if(contraseña.length == 0){
			alert("El campo 'contraseña' no es válido porque sólo contenía espacios");
			return;
		}
	}
	while (contraseña.substring(contraseña.length-1, contraseña.length) == ' ')
	{
		contraseña = contraseña.substring(0,contraseña.length-1);
	}
	
	if(nombre == ""){
		alert("Has dejado el campo 'nombre' vacío");
		return;
	}
	if(contraseña == ""){
		alert("Has dejado el campo 'contraseña' vacío");
		return;
	}
	
	document.getElementById("acceso").submit();
}