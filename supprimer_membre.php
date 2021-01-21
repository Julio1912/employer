<!DOCTYPE html>
<html>
<head>
	<title>supprimer zebu</title>
</head>
<body>
<?php 
	include("connexionbase.php");
	session_start();
	$supprimer=$base->QUERY('DELETE FROM membre WHERE id="'.$_GET['click'].'" ');
	header("Location:principale.php?page=liste");
?>
</body>
</html>