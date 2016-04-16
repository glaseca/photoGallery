<?php
	session_start();
	if(isset($_SESSION["usuario"]))
	{
	$id = $_POST["idfoto"];
	
	include ("inc/cabecera.php");
?>
	<title>PI - Pictures & Images - Detalle foto</title>
<?php
	include ("inc/cabecera2.php");
?>
	<div id="wrapper">
<?php
	include ("inc/menu.php");
?>	
		<div id="one-column">
			<p><h2>Puente sobre monta&ntildeas</h2></p>
			<p>	
				<img src="fotos/foto1.jpg" alt="Paisaje 1" id="fotodetalle" />
				<div id="datosfoto">
					ID:<label class="idfoto" for="idfoto"><?php echo $id; ?></label>
					T&iacute;tulo:<label class="titulo" for="titulo">Monte Verde</label>
					Fecha:<label class="fecha" for="fecha">15/06/2009</label>
					Pa&iacute;s:<label class="pais" for="pais">Chile</label>
					&Aacute;lbum:<label class="album" for="album">Fotos con Marta</label>
					Usuario:<label class="usuario" for="usuario">Benitolo</label>
				</div>
			</p>
		</div>
	</div>
<?php
	include ("inc/pie.php");
	}else
		header("Location: index.php");
?>