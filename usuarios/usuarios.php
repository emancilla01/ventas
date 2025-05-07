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
    <h2>Usuarios</h2>
    
    <form action="/index.html" method="post" id="usuarios" onsubmit="return false;">
        <label for="id">Id:</label>
        <input type="text" name="id" id="id">

        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre">

        <label for="email">email :</label>
        <input type="email" name="email" id="email">

        <label for="">contraseña</label>
        <input type="password" name="contraseña" id="contraseña">
        
        
        
        
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