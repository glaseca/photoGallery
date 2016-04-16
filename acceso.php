<?php
	if(isset($_POST["user"]))	
		$usuario = $_POST["user"];
	else
		$usuario ="";
	if(isset($_POST["pass"]))	
		$pass = $_POST["pass"];
	else
		$pass ="";
	if(isset($_POST["marcado"]))	
		$marcado = $_POST["marcado"];
	else
		$marcado ="";
	if(isset($_POST["yavalidado"]))	
		$yavalidado = $_POST["yavalidado"];
	else
		$yavalidado = 0;
	
	session_start();
	$_SESSION["usuario"] = $usuario;

	
	if(($usuario == "pepe" && $pass == "123") || ($usuario == "maria" && $pass == "456") || $yavalidado==1)
	{
		if($marcado==1){
			setcookie("acceso",  $usuario . "-" . date("d/m/Y H:i"), time()+2592000);  /* expira en un 30 días */
		}
	?>
		<html>
		<head>
			<title></title>
			<link href="styles/base.css" rel="stylesheet" type="text/css" />
		</head>
		<body onload="enviar()">
		<script language="JavaScript">
			function enviar(){
				document.form.submit();
			}
		</script>
		<div class="oculto">
		<form method="post" action="perfil.php" name="form" >
<?php
	if(isset($_POST["user"]))
	{
?>
			<input type="hidden" value="<?php echo $usuario; ?>" name="user" />
<?php
	}
?>
			<input type="submit" /> 
		</form>
		</div>
		</body>
		</html>
	<?php
	}
	else
		header("Location: index.php");
?>














