<html>
<head><title> Datos enviados </title>
</head>
<body> 
<?php

if(isset($_POST['Name'])&&
	isset($_POST['apellidop']) &&
	isset($_POST['apellidom']) &&
	isset($_POST['email']) &&
	isset($_POST['password']) && 
	isset($_POST['Fnac'])
	)
	{
		$name=$_POST['Name'];
		$ap=$_POST['apellidop'];
		$am=$_POST['apellidom'];
		$mail=$_POST['email'];
		$pass=$_POST['password'];
		$Fnac=$_POST['Fnac'];
		
		$FnacForm=strtotime($Fnac);
		$FnacForm2=date("Y",$FnacForm);
		
		$Fhoy=date("Y");
		$edad=$Fhoy-$FnacForm2;
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
	if($edad>=18)
		echo "Ya estas grande ($edad)";

	}
	
	else
	{
		 

     echo"<meta http-equiv='refresh' content='3; url=index.html'>";
	
	}
?>
</body>
</html>