<?php
	if($_POST["titulo"]!=NULL)
		$titulo = $_POST["titulo"];
	if($_POST["pais"]!=NULL)
		$pais = $_POST["pais"];
	if($_POST["fecha1"]!=NULL)
		$fecha1 = $_POST["fecha1"];
	if($_POST["fecha2"]!=NULL)
		$fecha2 = $_POST["fecha2"];

	include ("inc/cabecera.php");
?>
	<title>PI - Pictures & Images - Resultados</title>
<?php
	include ("inc/cabecera2.php");
?>
	<div id="wrapper">
<?php
	include ("inc/menu.php");
?>
		<div id="one-column">
			<p><h2>Resultados para "<span class="cursiva">paisaje</span>":</h2></p>
				<p>	
				
						
	<table cellpadding="0" cellspacing="0" border="0" class="sortable display-pc display-medio" id="sorter">	
		<tr>
			<th id="thimagen" class="nosort">Imagen</th>
			<th>T&iacute;tulo</th>
			<th>Fecha</th>
			<th>Pa&iacute;s</th>
		</tr>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1002" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto2.jpg" alt="Paisaje2" />
				</form>
			</td>
			<td>Puente sobre monta&ntilde;as</td>
			<td>23/10/1999</td>
			<td>Indonesia</td>
		</tr>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1003" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto3.jpg" alt="Paisaje3" />
				</form>
			</td>
			<td>Mini cascada</td>
			<td>14/02/2005</td>
			<td>Venezuela</td>
		</tr>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1005" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto5.jpg" alt="Paisaje5" />
				</form>
			</td>
			<td>Playa paradisiaca</td>
			<td>17/11/2004</td>
			<td>Brasil</td>
		</tr>
<?php
if($_POST["titulo"]!=NULL || $_POST["pais"]!=NULL || ($_POST["fecha1"]!=NULL && $_POST["fecha2"]!=NULL))
{
?>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1001" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto1.jpg" alt="Paisaje1" />
				</form>
			</td>
			<td>
<?php
if($_POST["titulo"]!=NULL)
	echo $titulo;
?>
			</td>
			<td>24/12/2009</td>
			<td>
<?php
if($_POST["pais"]!=NULL)
	echo $pais;
?>
			</td>
		</tr>
<?php
}
?>
	</table>
	
	<table cellpadding="0" cellspacing="0" border="0" class="sortable display-peq" id="sorter2">	
		<tr>
			<th id="thimagen" class="nosort">Imagen</th>
			<th>T&iacute;tulo</th>
		</tr>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1002" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto2.jpg" alt="Paisaje2" />
				</form>
			</td>
			<td>Puente sobre monta&ntilde;as</td>
		</tr>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1003" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto3.jpg" alt="Paisaje3" />
				</form>
			</td>
			<td>Mini cascada</td>
		</tr>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1005" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto5.jpg" alt="Paisaje5" />
				</form>
			</td>
			<td>Playa paradisiaca</td>
		</tr>
<?php
if($_POST["titulo"]!=NULL || $_POST["pais"]!=NULL || ($_POST["fecha1"]!=NULL && $_POST["fecha2"]!=NULL))
{
?>
		<tr>
			<td>
				<form action="detallefoto.php" method="POST">
					<input type="hidden" value="1001" name="idfoto" />
					<input type="image" class="fotoresultado" name="busqueda" src="fotos/foto1.jpg" alt="Paisaje1" />
				</form>
			</td>
			<td>
<?php
if($_POST["titulo"]!=NULL)
	echo $titulo;
?>
			</td>
		</tr>
<?php
}
?>
	</table>
	
			</p>
		</div>
	</div>
<script type="text/javascript">
	var sorter=new table.sorter("sorter");
	sorter.init("sorter",1);
</script>
<script type="text/javascript">
	var sorter2=new table2.sorter2("sorter2");
	sorter2.init2("sorter2",1);
</script>
<?php
	include ("inc/pie.php");
?>
