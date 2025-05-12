<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $accion = $_REQUEST['accion'];

    if ($accion === "consultar") {
        $sql = "SELECT * FROM categorias;";   
    }elseif ($accion === "insertar") {
        $sql = "INSERT INTO categorias ('id', 'nombre') 
                VALUES ('$id', '$nombre')";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM categorias WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE categorias SET nombre = '$nombre' WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM categorias WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}

?>


<article>
<!-- <div id="formdiv"> -->
    <h2>Categorias</h2>
    <form action="/index.html" method="post" id="frm" onsubmit="return false;"> 
        
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" value="" readonly>

        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre">
                
        
        <button onclick="enviardatos('frm', '/categorias/ins_act.php', 'contenedor1')">Grabar</button>

        <!-- tarea proyecto unidad 3 -->
        <!-- <button onclick="peticiones('consultar')">Consultar</button>
        <button onclick="peticiones('insertar')">Insertar</button>
        <button onclick="peticiones('editar')">Editar</button>
        <button onclick="peticiones('actualizar')">Actualizar</button>
        <button onclick="peticiones('eliminar')">Eliminar</button> -->
        <!-- tarea proyecto unidad 3 -->

    </form>
<!-- </div> -->

    
</article>
<div id="resultados" style="margin-top: 20px;"></div>