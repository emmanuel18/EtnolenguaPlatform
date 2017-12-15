<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
</head>
<?php
include 'cn.php';

//$palabra = $_POST['Wordesp'];
$palabra1 = $_POST['Wordmix'];

												
//$query = mysqli_query($conexion, "SELECT mixe FROM palabras WHERE esp = '$palabra'");
$query1 = mysqli_query($conexion, "SELECT esp FROM palabras WHERE mixe = '$palabra1'");
if ($row = mysqli_fetch_row($query1)) {
	$rest4 = trim($row[0]);
	echo "<script language='javascript'>alert('$rest4');
	window.location.href='translate.php';</script>"; 
	
	
}

	echo '<script language="javascript">alert("La palabra que buscas aún no se encuentra en el diccionario.");</script>';
	echo "<script language='javascript'>alert('Puedes solicitar una palabra desde nuestra sección de contácto.');
	window.location.href='translate.php';</script>";

											
$query->close();
	
?>
</html>