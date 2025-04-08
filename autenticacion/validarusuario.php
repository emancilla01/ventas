<?php
// var_dump($_REQUEST);

$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];
if ($usuario === 'administrador'){
    if ($clave === '123') {
        echo "Ezequiel Mancilla";
    }
    else {
        echo "Clave incorrecta.";
    }
}
else
{
    echo "Usuario no valido.";
}
?>