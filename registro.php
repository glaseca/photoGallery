<?php
	include ("inc/cabecera.php");
?>
	<title>PI - Pictures & Images - Registro</title>
<?php
	include ("inc/cabecera2.php");
?>
	<div id="wrapper">
<?php
	include ("inc/menu.php");
?>	
		<div id="one-column">
			<p><h2>Nuevo usuario</h2></p>
			<p>
			<form id="registro" name="registro" action="nuevousuario.php" method="POST" enctype="multipart/form-data">
				<table>									
					<tr><td><label for="user">Usuario: </label><input type="text" name="user" id="user" placeholder="Apodo" size="15" autofocus="autofocus" required="required" /></td>
					<td><label for="email">Email: </label><input type="email" name="email" id="email" placeholder="apodo@dominio.com" size="18" required="required" /></td>
					<tr><td><label for="pass">Contrase&ntilde;a: </label><input type="password" name="pass" id="pass" placeholder="Clave de acceso" size="15" required="required" /></td>
					<td><label for="pass2">Repite contrase&ntilde;a: </label><input type="password" name="pass2" id="pass2" placeholder="Otra vez" size="15" required="required" /></td></tr>	
					<tr><td><label for="sexo">Sexo: </label><input checked="checked" type="radio" name="sexo" id="hombre" value="hombre" /> Hombre <input type="radio" name="sexo" id="mujer" value="mujer" /> Mujer</td>
					<td><label for="bday">Edad: </label><input type="text" placeholder="18-09-1982" name="bday" id="bday" required="required" /></td></tr>
					<tr><td colspan="2"><label for="avatar">Avatar: </label><input type="file" name="avatar" id="avatar" accept="image/*" /></td></tr>
					<tr><td><label for="ciudad">Ciudad de residencia: </label><input type="text" name="ciudad" id="ciudad" placeholder="Zaragoza" size="15" /></td>
					<td><label for="pais">Pa&iacute;s de residencia: </label><input type="text" name="pais" id="pais" placeholder="Espa&ntilde;a" size="15" /></td></tr>
					<tr><td colspan="2"><input type="submit" id="registrar" name="registrar" value="Regístrame" onclick="validaregistro()" /></td></tr>
				</table>
			</form>
			</p>
		</div>
	</div>
<?php
	include ("inc/pie.php");
?>