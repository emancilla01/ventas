<?php
include_once "../db/db.php";

$articulos = new db();
$articulos->conectar();
$sql = "SELECT id, nombre, descripcion, precio, stock  FROM articulos";
$datos = $articulos->obtenerRegistros($sql);
?>



<?php include_once "../articulos/frm.php"; ?>

<!-- <div id="contenedor3" >

</div> -->

<hr>
<?php include_once "../articulos/tabla.php"; ?>