<?php 
$link = mysqli_connect("localhost", "root", "", "tienda de mascotas"); 
if (!$link) { 
die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
} 
echo 'Éxito... ' . mysqli_get_host_info($link) . "\n"; ?> 