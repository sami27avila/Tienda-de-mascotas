<?php 
include "./conexion.php"; 
$sql="INSERT INTO mascotas VALUES 
('$_POST[id_mascota]','$_POST[nombre]','$_POST[tipo]', '$_POST[raza]','$_POST[sexo]','$_POST[nombre_del_cliente]','$_POST[fecha_de_nacimiento]')"; 
$result = mysqli_query($link, $sql);  if (!mysqli_error($link)) { 
?> 
<script> 
alert("Se ingreso con total normalidad"); 
</script> 
<?php 
}else{ 
?> 
<script> 
alert ("Estamos en mantenimiento preventivo"); 
</script> 
<?php } ?> 
<meta http-equiv="refresh" content="0;URL=insertar.php"> 
