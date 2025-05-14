<table>
    <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>ID Proveedor</th>
        <th>Total</th>
    </tr>
    <?php foreach ($datos2 as $dato) {   ?>
    <tr>
        <td> <?php echo $dato['id']; ?> </td>
        <td> <?php echo $dato['fecha']; ?></td>
        <td> <?php echo $dato['proveedor_id']; ?></td>
        <td> <?php echo $dato['total']; ?></td>
        <td>
            <button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'compras'; ?>')">editar</button></td>        
        <td><button onclick="eliminar('<?php echo $dato['id']; ?>','<?php echo 'compras'; ?>')">Eliminar</button></td>
    </tr>
    <?php } ?>
</table>