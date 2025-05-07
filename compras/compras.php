<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $email = $_REQUEST['email'];
    $contraseña = $_REQUEST['contraseña'];
    $accion = $_REQUEST['accion'];
    

    if ($accion === "consultar") {
        $sql = "SELECT * FROM usuarios;";   
    } elseif ($accion === "insertar") {
        $sql = "INSERT INTO usuarios ('id', 'nombre', 'email', 'contraseña') 
                VALUES ('$id', '$nombre', '$email', '$contraseña')";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', contraseña = '$contraseña',
        WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM usuarios WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}
?>
<article>
    <h2>Compras</h2>
    <form action="/index.html" method="get" id="">
        
        <!-- <label for=""></label> -->
        <label for="id">Id:</label>
        <input type="number" name="id" id="id">

        <label for="idproveedor">Id Proveedor :</label>
        <input type="number" name="idproveedor" id="idproveedor">

        <label for="total">Total :</label>
        <input type="number" step="0.01" name="total" id="total">

        <label for="fecha">fecha :</label>
        <input type="datetime-local" name="fecha" id="fecha">
                
        <!-- <label></label>
        <button type="button" onclick="enviar()">Enviar</button> -->

        <button onclick="peticiones('consultar', '/usuarios/usuarios.php', 'usuarios')">Consultar</button>
        <button onclick="peticiones('insertar', '/usuarios/usuarios.php', 'usuarios')">Insertar</button>
        <button onclick="peticiones('editar', '/usuarios/usuarios.php', 'usuarios' )">Editar</button>
        <button onclick="peticiones('actualizar', '/usuarios/usuarios.php', 'usuarios')">Actualizar</button>
        <button onclick="peticiones('eliminar', '/usuarios/usuarios.php', 'usuarios')">Eliminar</button>

    </form>

    <h2>Detalle de Compras</h2>
    <form action="/index.html" method="get" id="">
        
        <!-- <label for=""></label> -->
        <label for="iddetalle">Id:</label>
        <input type="number" name="iddetalle" id="iddetalle">

        <label for="idcompra">Id Compra :</label>
        <input type="number" name="idcompra" id="idcompra">

        <label for="idarticulo">Id Articulo :</label>
        <input type="number" name="idarticulo" id="idarticulo">

        <label for="cantidad">Cantidad :</label>
        <input type="number" name="cantidad" id="cantidad">

        <label for="preciounit">Precio Unitario :</label>
        <input type="number" step="0.01" name="preciounit" id="preciounit">

        <label for="subtotal">Subtotal :</label>
        <input type="number" step="0.01" name="subtotal" id="subtotal">    
        
        
        <!-- <label></label>
        <button type="button" onclick="enviar()">Enviar</button> -->

        <button onclick="peticiones('consultar', '/usuarios/usuarios.php', 'usuarios')">Consultar</button>
        <button onclick="peticiones('insertar', '/usuarios/usuarios.php', 'usuarios')">Insertar</button>
        <button onclick="peticiones('editar', '/usuarios/usuarios.php', 'usuarios' )">Editar</button>
        <button onclick="peticiones('actualizar', '/usuarios/usuarios.php', 'usuarios')">Actualizar</button>
        <button onclick="peticiones('eliminar', '/usuarios/usuarios.php', 'usuarios')">Eliminar</button>


    </form>
</article>
<div id="resultados" style="margin-top: 20px;"></div>