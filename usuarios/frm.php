<?php



?>


<article>
<!-- <div id="formdiv"> -->
    <h2>Usuarios</h2>
    <form action="/index.html" method="post" id="frm" onsubmit="return false;">
        <label for="id">Id:</label>
        <input type="text" name="id" id="id">

        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre">

        <label for="email">email :</label>
        <input type="email" name="email" id="email">

        <label for="">contraseña</label>
        <input type="password" name="contraseña" id="contraseña">
        
        <label for=""></label>
        <button onclick="enviardatos('frm', '/usuarios/ins_act.php', 'contenedor1')">Grabar</button>
        <button onclick="">Consultar</button>  

        

    </form>
    
<!-- </div> -->

    
</article>
<!-- <div id="resultados" style="margin-top: 20px;"></div> -->