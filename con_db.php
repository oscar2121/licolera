<?php
	$conex = mysqli_connect("localhost","root","","dbtienda");
	if ($conex){
		echo "se conecto bien";
	}else{
		echo"tenemos problemas de conexion";
	}
	?>