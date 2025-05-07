<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $stock = $_REQUEST['stock'];
    $accion = $_REQUEST['accion'];
    

    if ($accion === "consultar") {
        $sql = "SELECT * FROM articulos;";   
    }elseif ($accion === "insertar") {
        $sql = "INSERT INTO articulos ('id', 'nombre', 'descripcion', 'precio', 'stock') 
                VALUES ('$id', '$nombre', '$descripcion', '$precio', '$stock')";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM articulos WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE articulos SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio',
        stock = '$stock' WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM articulos WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}

?>

<article>
    <h2>Articulos</h2>
    <form action="/index.html" method="post" id="articulos" onsubmit="return false;">
    <label for="id">Id:</label>
    <input type="text" name="id" id="id">

    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre">

    <label for="descripcion">Descripcion :</label>
    <input type="text" name="descripcion" id="descripcion">
    
    <label for="precio">Precio :</label>
    <input type="number" name="precio" id="precio">

    <label for="stock">Stock :</label>
    <input type="number" name="stock" id="stock">
    
    <!-- <label for=""></label>
    <input type="text"> -->
     
    
    <!-- <label></label> -->
    <!-- <button type="button" onclick="enviar()">Enviar</button> -->
    <button onclick="peticiones('consultar', '/articulos/articulos.php', 'articulos')">Consultar</button>
    <button onclick="peticiones('insertar', '/articulos/articulos.php', 'articulos')">Insertar</button>
    <button onclick="peticiones('editar', '/articulos/articulos.php', 'articulos' )">Editar</button>
    <button onclick="peticiones('actualizar', '/articulos/articulos.php', 'articulos')">Actualizar</button>
    <button onclick="peticiones('eliminar', '/articulos/articulos.php', 'articulos')">Eliminar</button>

    </form>

</article>
<div id="resultados" style="margin-top: 20px;"></div>