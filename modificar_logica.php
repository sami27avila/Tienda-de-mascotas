<?php include("./conexion.php"); 
$sql = "UPDATE mascotas SET nombre='$_POST[nombre]', 
tipo='$_POST[apellido]',raza='$_POST[raza]',sexo='$_POST[sexo]',nombre_del_cliente='$_POST[nombre_del_cliente]', fecha_de_nacimiento='$_POST[fecha_de_nacimiento]' where id_mascota='$_POST[oculto]'"; 
$result = mysqli_query($link, $sql); 
if (!mysqli_error($link)) { 
?> 
<script> 
alert("Se modifico correctamente"); 
</script> 
<?php } else { ?> 
<script> 
alert("Estamos en mantenimiento preventivo"); 
</script> 
<?php } ?> 
<meta http-equiv="refresh" content="0;URL=modificar.php">
