<?php 

include("con_db.php");
	
	if (isset($_POST['register'])) {

	
		if (strlen($_POST['name'])>=1 && strlen($_POST['codigo'])>=1 && strlen($_POST['direccion'])>=1 && strlen($_POST['nombre'])>=1 && strlen($_POST['dni'])>=1 && strlen($_POST['contraseña'])>=1) {

			$name = trim($_POST['name']);
			$codigo= trim($_POST['codigo']);
			$direccion= trim($_POST['direccion']);
			$nombre = trim ($_POST['nombre']);
			$dni = trim ($_POST['dni']);
			$contraseña = trim ($_POST['contraseña']);
			$fechareg = date("d/m/y");
			

			$consulta="INSERT INTO datos(name, codigo, direccion, nombre, dni, contraseña) VALUES ('$name','$codigo','$direccion','$nombre','$dni','$contraseña','$fechareg')";
			$resultado=mysqli_query($conex,$consulta);
			if ($resultado) {
				?>
				<h3 class="ok">¡Todo bien!</h3>
				<?php
			}else{
				?>
				<h3 class="bad">¡No se envio nada,  revisa el codigo!</h3>
				<?php
			}
		}else {
			?>
			<h3 class="bad">¡Por favor llene todos los campos!</h3>
			<?php 
		}


	}
 ?>