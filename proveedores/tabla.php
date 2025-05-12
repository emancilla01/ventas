
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Contacto</th>
            <th>Direccion</th>            
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['nombre'];?></td>
            <td><?php echo $dato['contacto'];?></td>
            <td><?php echo $dato['direccion'];?></td>            
            <td><button onclick="editar(<?php echo $dato['id'];?>,'<?php echo $dato['nombre'];?>', <?php echo $dato['contacto'];?>, <?php echo $dato['direccion'];?>)" >Editar</button></td>
            <!-- <td><button onclick="eliminar(<?php echo $dato['id'];?>)" >Eliminar</button></td> -->
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/proveedores/eliminar.php', 'contenedor1')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>