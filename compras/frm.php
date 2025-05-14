<form   action="" 
        method="post" 
        id="frm" 
        onsubmit="return false;">
    <label for="">ID :</label>
    <input type="text" name="id" id="id" value="" readonly>
    <label for="fecha">Fecha :</label>
    <input type="date" name="fecha" id="fecha">
    <label for="proveedor_id">Proveedor :</label>
    <select name="proveedor_id" id="proveedor_id">
        <?php foreach ($proveedores as $proveedor) { 
            echo "<option value='" . $proveedor["id"] . "'>" 
                                   . $proveedor["nombre"] ."
                  </option>";
         } ?>
    </select>
    <label for="Total">Total :</label>
    <input type="text" name="total" id="total">
    <label for=""></label>
    <button onclick="enviardatos('/compras/ins_act.php')">Grabar</button>
</form>





