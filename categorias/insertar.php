<?php

  include_once "../db/db.php";
  $categorias = new db();
  $categorias->conectar();

  $nombre=$_REQUEST['nombre'];

  $sql = "INSERT INTO categorias (nombre) values ('$nombre')";
  $categorias->insertar($sql);
  
  $categorias->desconectar();
?> 