<?php
	include ("inc/cabecera.php");
?>
	<title>PI - Pictures &amp; Images</title>
<?php
	include ("inc/cabecera2.php");
?>	
	<header>
	<?php
	if (isset($_COOKIE['acceso']))
	{
		$usuario = strstr($_COOKIE['acceso'], '-', true); 
		$fecha = substr($_COOKIE['acceso'], -16,10);
		$hora = substr($_COOKIE['acceso'], -5);
	?>	
		<p>Hola <span class="negrita"><?php echo $usuario; ?></span>, su &uacute;ltima visita fue el <span class="negrita"><?php echo $fecha; ?></span>
			a las <span class="negrita"><?php echo $hora; ?></span>.
			<form id="acceso" name="acceso" action="acceso.php" method="POST">
				<input type="hidden" name="yavalidado" value="1" />
				<input type="submit" value="Acceder" />
			</form>
			<form id="borrarcookie" name="borrarcookie" action="borracookie.php" method="POST">
				<input type="submit" value="Entrar con otro usuario" />
			</form>			
		</p>
	<?php
	}else
	{
	?>
		<form id="acceso" name="acceso" action="acceso.php" method="POST">			
			<label for="user">Usuario:</label><input type="text" id="user" name="user" placeholder="Apodo" size="15"/><div class="display-peq"><br /></div>
			<label for="pass">Contrase&ntilde;a:</label><input type="password" id="pass" name="pass" placeholder="Tu password" size="15" /><div class="display-peq"><br /></div>
			<label for="recordar">recordarme</label><input type="checkbox" id="marcado" name="marcado" checked="checked" value="1" /><div class="display-peq"><br /></div>
			<input type="submit" value="Acceder" id="acceder" name="acceder" onclick="validaacceso()"/><div class="display-peq"><br /></div>
		</form>	
	<?php
	}
	?>
	</header>
	<div id="wrapper">
<?php
	include ("inc/menu.php");
?>	
	<div id="contenido">
	<aside id="index">
		<ul class="botones">
			<li><form action="registro.php" method="POST"><input class="botonbusqueda" type="submit" value="Nuevo usuario" /></form></li>
			<li><form action="buscar.php" method="POST"><input class="botonbusqueda" type="submit" value="B&uacute;squeda" /></form></li>
		</ul>
		
		<p><a href="http://www.facebook.com" target="_blank"><img src="iconos/facebook.png" alt="facebook" class="redes" /></a></p>
		<p><a href="http://www.twitter.com" target="_blank"><img src="iconos/twitter.png" alt="twitter" class="redes" /></a></p>
		<p><a href="http://www.plus.google.com" target="_blank"><img src="iconos/googleplus.png" alt="google+" class="redes" /></a></p>
	
	</aside>	
	<section id="section">
		<p class="ultimas">&Uacute;ltimas fotos subidas:</p>
		
		<p>
			<form action="detallefoto.php" method="POST">
				<input type="hidden" value="1001" name="idfoto" />
				<input type="image" class="conSombra" name="busqueda" src="fotos/foto1.jpg" alt="Paisaje1" width="205" height="145" />
			</form>
			<form action="detallefoto.php" method="POST">
				<input type="hidden" value="1002" name="idfoto" />
				<input type="image" class="conSombra" name="busqueda" src="fotos/foto2.jpg" alt="Paisaje2" width="205" height="145" />
			</form>
			<form action="detallefoto.php" method="POST">
				<input type="hidden" value="1003" name="idfoto" />
				<input type="image" class="conSombra" name="busqueda" src="fotos/foto3.jpg" alt="Paisaje3" width="205" height="145" />
			</form>
			<form action="detallefoto.php" method="POST">
				<input type="hidden" value="1004" name="idfoto" />
				<input type="image" class="conSombra" name="busqueda" src="fotos/foto4.jpg" alt="Paisaje4" width="205" height="145" />
			</form>
			<form action="detallefoto.php" method="POST">
				<input type="hidden" value="1005" name="idfoto" />
				<input type="image" class="conSombra" name="busqueda" src="fotos/foto5.jpg" alt="Paisaje5" width="205" height="145" />
			</form>
			
		</p>
	</section>	
	</div>
	</div>
<?php
	include ("inc/pie.php");
?>		