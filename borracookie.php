<?php
	setcookie("acceso","", time()-3600);  /* borramos la cookie poniendo un tiempo anterior */
	header("Location: index.php");
?>