<html>
<head><title> Datos enviados </title>
</head>
<body> 
<?php

if(isset($_POST['Name'])&&
	isset($_POST['apellidop']) &&
	isset($_POST['apellidom']) &&
	isset($_POST['email']) &&
	isset($_POST['password']) 
	)
	{
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

	}
	
	else
	{
		$var1=100.0;
		$var2="100.0";
		 if($var1 === $var2)
			echo "son iguales"; 

     echo"<meta http-equiv='refresh' content='10; url=index.html'>";
	
	}
?>
</body>
</html>