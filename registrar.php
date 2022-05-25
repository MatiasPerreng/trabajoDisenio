<?php
if(isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono'])) {
$cedula = trim($_POST['cedula']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$telefono = trim($_POST['telefono']);
echo "Bievenido " . $nombre . " " . $apellido;
echo "<br>";
echo "Tu numero de telefono es: " . $telefono;
echo "<br>";
echo "Y tu numero de cedula es: " . $cedula;
}
?>