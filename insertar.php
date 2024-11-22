<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, 
initial-scale=1.0"> 
<title>Insertar</title> 
<link rel="stylesheet" href="./style.css"> 
</head> 
<body> 
<?php include './menu.php' ?> 
<form method="post" action="./insertar_logica.php"> 
<label id="id_mascota">Mascota:<input id="id_mascota" name="id_mascota" type="text" required /></label> 
<label id="nombre">Nombre: <input id="nombre" name="nombre" type="text" required /></label> 
<select id="tipo" name="tipo" required>
<option value="">Elige una opcion</option>
<option value="perro">P</option> 
<option value="gato">G</option> 
<option value="ave">A</option>     
</select> 
<label id="raza">Raza: <input id="raza" name="raza" type="text" required /></label> 
<legend>Sexo:</legend>
<input type="radio" name="sexo" id="F" value="F" required> <label for="F">F</label> 
<input type="radio" name="sexo" id="M" value="M"> <label for="M">M</label> 
<label id="nombre_del_cliente">Nombre_del_cliente: <input id="nombre_del_cliente" name="nombre_del_cliente" type="text" required /></label> 
<label id="fecha_de_nacimiento">Fecha_de_nacimiento: <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="date" required></label>
<input id="registrar" name="Registrar" type="submit" /> <input id="limpiar" name="Limpiar" type="reset" /> </form> 
</body> 
</html> 
