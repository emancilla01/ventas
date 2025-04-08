<?php
$servername = "localhost";
$username = "root";
$password = "Ch33rlos.";
$dbname = "ventas";

$nombre = $_REQUEST['nombre'];
// $arreglo = array(abc=>'uno', 'veinte', 'treinta','cuarenta','cincuenta','sesenta','setenta','ochenta','noventa','cien');
// $arreglo['abc'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO categorias (nombre)
  VALUES ('$nombre')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Registro insertado correctamente";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 