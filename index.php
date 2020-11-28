<!DOCTYPE html>
<html>
<head>
    <title>Registrar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>

    <form method="post">
        <img src="logo.jpg " width= "200">
        <h1> Bienvenid@ <br> ¡Registra tu licoleria!</h1>
        <input type="text" name="name" placeholder="Nombre licoleria">
        <input type="text" name="codigo" placeholder="codigo">
        <input type="text" name="direccion" placeholder="Direccion de licoleria ">
        <input type="text" name="nombre" placeholder="Nombre del dueño">
        <input type="text" name="dni" placeholder="DNI dueño">
        <input type="password" name="contraseña" placeholder="Contraseña">
        
        <input type="submit" name="register">
    </form>
    
        <?php
        include ("registrar.php");
        ?>
        
</body>
</html>

