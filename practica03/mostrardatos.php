<html>
<head><title> Datos enviados </title>
</head>
<body> 
<?php
$name=$_POST['Name'];
$ap=$_POST['apellidop'];
$am=$_POST['apellidom'];
$mail=$_POST['email'];
$pass=$_POST['password'];
echo  "
<table border='1'>
	<tr>
		<td>
		Nombre completo :
		</td>
		<td>
		$name $ap $am
	</tr>
	<tr>
		</td>
		<td>
		Correo electronico :
		</td>
		<td>
		$mail
		</td>
	</tr>
<tr>
		</td>
		<td>
		Contraseña :
		</td>
		<td>
		$pass
		</td>
	</tr>	
</table>	
";
?>
</body>
</html>