<?php
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$email = $_POST["email"];
	$sexo = $_POST["sexo"];
	$bday = $_POST["bday"];

	if($_POST["ciudad"]!=NULL)
		$ciudad = $_POST["ciudad"];
	if($_POST["pais"]!=NULL)
		$pais = $_POST["pais"];
	
	if($_FILES["avatar"]["name"]!=NULL){
		if ((($_FILES["avatar"]["type"] == "image/gif") || ($_FILES["avatar"]["type"] == "image/jpeg") || ($_FILES["avatar"]["type"] == "image/jpg") ||
			($_FILES["avatar"]["type"] == "image/png")) && ($_FILES["avatar"]["size"] < 1000000)) {
		  	//echo "Nombre: " . $_FILES["avatar"]["name"] . "<br>";
			//echo "Tipo: " . $_FILES["avatar"]["type"] . "<br>";
			//echo "Tama&ntilde;o: " . ($_FILES["avatar"]["size"] / 1024) . " kB<br>";
			//echo "Ruta temporal: " . $_FILES["avatar"]["tmp_name"] . "<br>";
			move_uploaded_file($_FILES["avatar"]["tmp_name"], "upload/" . $_FILES["avatar"]["name"]);
			//echo "Guardado en: " . "upload/" . $_FILES["avatar"]["name"];
		 }
	}
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
		<div id="nuevousuario">
		<h2>Inserci&oacute;n realizada, tus datos son:</h2>
		<ul>
<?php 
	echo "<li>Nombre: " . $user ."</li><br />";
	echo "<li>Email: " . $email ."</li><br />";
	echo "<li>Contrase&ntilde;a: " . $pass ."</li><br />";
	echo "<li>Sexo: " . $sexo ."</li><br />";
	echo "<li>Fecha de nacimiento: " . $bday ."</li><br />";
	
	if($_POST["ciudad"]!=NULL)
		echo "<li>Ciudad: " . $ciudad ."</li><br />";
	if($_POST["pais"]!=NULL)
		echo "<li>Pa&iacute;s: " . $pais ."</li><br />";	
		
	if($_FILES["avatar"]["name"]!=NULL){
		echo "<li>Avatar: "
		?><img src="upload/<?php echo $_FILES["avatar"]["name"]; ?>" class="avatar" height="50px" width="50px" /></li><br />
	<?php
	}else		
	?><li>Avatar: <img class="avatar" src="upload/user.png" height="50px" width="50px" /></li><br />
		</ul>
		</div>
	</div>
	</div>

<?php
	include ("inc/pie.php");
?>
