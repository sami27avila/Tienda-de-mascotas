<?php include './conexion.php' ?> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Documento sin título</title> 
<link rel="stylesheet" href="./style.css"> 
</head> 
<body> 
<?php include './menu.php' ?> 
<table>
<tr> 
<th>ID_MASCOTA</th> 
<th>NOMBRE</th> 
<th>TIPO</th> 
<th>RAZA</th> 
<th>SEXO</th> 
<th>NOMBRE_DEL_CLIENTE</th> 
<th>FECHA_DE_NACIMIENTO</th> 
</tr> 
<?php 
$sql = "SELECT * FROM mascotas"; 
$result = mysqli_query($link, $sql);  while ($row = mysqli_fetch_assoc($result)) { 
?> 
<tr> 
<td><?= $row['id_mascota']; ?></td> 
<td><?= $row['nombre']; ?></td> 
<td><?= $row['tipo']; ?></td> 
<td><?= $row['raza']; ?></td> 
<td><?= $row['sexo']; ?></td> 
<td><?= $row['nombre_del_cliente']; ?></td> 
<td><?= $row['fecha_de_nacimiento']; ?></td> 
<td><a href="modificar_formulario.php?mod=<?php print 
$row['id_mascota']; ?> ">Modificar</a></td> 
<td><a href="eliminar.php?eli=<?php print $row['id_mascota']; ?> ">Eliminar</a></td> 
</tr> 
<?php } ?> 
</table> 
</body> 
</html> 
