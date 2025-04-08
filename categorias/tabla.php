
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['nombre'];?></td>
        </tr>
        <?php } ?>
    </table>