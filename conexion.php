<?php
$conexion = mysqli_connect("localhost", "root", "", "tinta_nocturna");

if (!$conexion) {
  die("❌ Error de conexión: " . mysqli_connect_error());
}
?>