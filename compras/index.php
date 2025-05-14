<?php
include_once "../db/db.php";
$dbventas = new db();
$dbventas->conectar();
$sql = "SELECT * FROM compras"; 
$datos2 = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM proveedores"; 
$proveedores = $dbventas->obtenerRegistros($sql);
$dbventas->desconectar();
?>

<section>
    <h3>Compras</h3>
    <?php include_once "../compras/frm.php"; ?>
    <div>
         <?php include_once "../detalles_compra/index.php"; ?>
    </div>
    <hr>
    <hr>
    <div id="contenedor3">
             <?php include_once "../compras/tabla.php"; ?>
    </div>
</section>
























    <!-- <button onclick="obtenerregistros()">ver</button> -->

