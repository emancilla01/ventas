<?php
  include_once "../db/db.php";
  $dbventas = new db();
  $dbventas->conectar();
    
  $id=$_REQUEST['id'];
  $fecha=$_REQUEST['fecha'];
  $proveedor_id = $_REQUEST['proveedor_id'];
  $total = $_REQUEST['total'];

  if ($id != "") {
    $sql = "UPDATE compras 
            SET fecha = '$fecha', 
                proveedor_id = '$proveedor_id',
                total = '$total' 
            WHERE id = $id";
    $dbventas->actualizar($sql);
  }
  else {
  $sql = "INSERT INTO compras (fecha, proveedor_id, total) 
          VALUES ('$fecha','$proveedor_id','$total')";
  $dbventas->insertar($sql);
  }

  $sql = "SELECT * FROM compras"; 
  $datos2 = $dbventas->obtenerRegistros($sql);
  include_once "../compras/tabla.php";
  $dbventas->desconectar();
?>