<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$genero = $_POST['genero'];
$obras = $_POST['obras'];
$biografia = $_POST['biografia'];

$sql = "INSERT INTO autores (nombre, pais, genero, obras, biografia)
        VALUES ('$nombre', '$pais', '$genero', '$obras', '$biografia')";

if ($conexion->query($sql) === TRUE) {
  echo "Autor agregado correctamente.";
} else {
  echo "Error: " . $conexion->error;
}
?>