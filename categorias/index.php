<?php
include_once "../db/db.php";

$categorias = new db();
$categorias->conectar();
$sql = "SELECT id, nombre FROM categorias";
$datos = $categorias->obtenerRegistros($sql);
?>

<div id="contenedor3" >

</div>

<?php include_once "../categorias/frm.php"; ?>
<hr>
<?php include_once "../categorias/tabla.php"; ?>