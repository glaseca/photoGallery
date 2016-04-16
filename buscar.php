<?php
	include ("inc/cabecera.php");
?>
	<title>PI - Pictures & Images - Buscar</title>
<?php
	include ("inc/cabecera2.php");
?>
	<div id="wrapper">
<?php
	include ("inc/menu.php");
?>	
		<div id="one-column">
			<p><h2>Buscar im&aacute;genes</h2></p>
			<p>
				<form id="buscar" name="buscar" action="resultado.php" method="POST">
					<label for="titulo">T&iacute;tulo: </label><input type="text" id="titulo" name="titulo" placeholder="paisaje" autofocus="autofocus"/>
					<label for="fecha">Fecha: </label>entre<input type="text" id="fecha1" placeholder="20-10-1999" name="fecha1" />y<input type="text" id="fecha2" placeholder="17-03-2002" name="fecha2" />
					<label for="pais">Pa&iacute;s: </label><input type="text" id="pais" name="pais" placeholder="Francia" /><br />
					<input type="submit" id="busqueda" name="busqueda" value="Buscar" />
				</form>
			</p>
		</div>
	</div>
<?php
	include ("inc/pie.php");
?>