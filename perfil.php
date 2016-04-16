<?php
	session_start();
	if(isset($_SESSION["usuario"]))
	{
		if(isset($_POST["user"]))
			$usuario = $_POST["user"];
		else
			$usuario = strstr($_COOKIE['acceso'], '-', true); 

	include ("inc/cabecera.php");
?>
	<title>PI - Pictures &amp; Images - <?php echo $usuario; ?></title>
<?php
	include ("inc/cabecera2.php");
?>	
	<header>
		<p class="saludo">Hola <?php echo $usuario; ?><a href="salir.php">Salir</a></p>
	</header>
	<div id="wrapper">
<?php
	include ("inc/menu.php");
	
?>	
	<div id="contenido">
		<div id="datosperfil">
			<aside>
			<h2>Mis datos</h2>
			<ul>
				<li>Nombre: <?php echo $usuario; ?></li>
				<li>Email: pepe@gmail.com</li>
				<li>Fecha de nacimiento: 21-10-1982</li>
				<li>Sexo: hombre</li>
				<li>Ciudad: M&aacute;laga</li>
				<li>Pa&iacute;s: Espa&ntilde;a</li>
				<li class="textoavatar">Avatar: <img src="upload/user.png" alt="Avatar de <?php echo $usuario; ?>" /></li>
			</ul>
			<form id="modificarperfil" method="POST" action="modificarperfil.php">
				<input type="hidden" value="<?php echo $usuario; ?>" name="user" />
				<input type="submit" value="Modificar datos" />
			</form>
			<form id="baja" method="POST" action="baja.php">
				<input type="hidden" value="<?php echo $usuario; ?>" name="user" />
				<input type="submit" value="Dame de baja" />
			</form>
			</aside>
		</div>
		<div id="perfilalbum">
			<section id="section">
			<h3>Mis &aacute;lbumes:</h3>
			<p class="albumes">fotos Valencia, carnavales 2012, Nochevieja 96'</p>
			<form id="creacionalbum" method="POST" action="creaalbum.php">
				<input type="hidden" value="<?php echo $usuario; ?>" name="user" />
				<input type="submit" value="Crear nuevo &aacute;lbum" />
			</form>
			<form id="agregarfoto" action="agregarfoto.php" method="POST" enctype="multipart/form-data">
				<fieldset>
				<legend>A&ntilde;adir foto a &aacute;lbum:</legend>
				<input class="nombre" type="text" placeholder="Nombre del &aacute;lbum" name="album" />
				<input type="file" accept="image/*" name="foto" />
				<input type="hidden" value="<?php echo $usuario; ?>" name="user" />
				<input type="submit" value="Subir foto" />
				</fieldset>
			</form>
			</section>
		</div>
	</div>
	</div>
<?php
	include ("inc/pie.php");
	}else
		header("Location: index.php");
?>		