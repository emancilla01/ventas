<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lo basico</title>
</head>
<body>
    <h1>PHP basico</h1>
    <hr>
    <?php
    $edad = 35;
    $nombre = "Antonio Chavez";
    $sabefrances = false;
    $salario = 1500.50; 

    $carreras = array( "Ing. Sistemas", "Ing. Electronia", "Ing. Industrial");

    //arreglo asociativo 
    $carreras2 = ["isc"=>"Ing. Sistemas", "ie"=> "Ing. Electronia", "ii"=> "Ing. Industrial"];

    echo "<h2>Variables</h2>";
    echo "<h2>Edad: $edad</h2>";


    ?>
    <form action="basico.php" method="post" >
        <label for="">Nombre</label>
        <input type="text" name="nombre" >
        <label for="">Edad: </label>
        <input type="number" name="edad" >
        <label for=""></label>
        <input type="submit" name="btnsubmit" value="Enviar"> 
    </form>
    <hr>
    <ul>
        <?php 
        for ($i=0; $i < count($carreras); $i++) { 
            echo "<li>$carreras[$i]</li>";
        }        
        ?>     
    </ul>
    <hr>
    <ul>
        <?php 
        foreach ($carreras as $carrera) {
            echo "<li>$carrera</li>";
        }        
        ?>
    </ul>
    <hr>
    <ul>
        <!-- arreglo asociativo -->
        <?php 
        foreach ($carreras2 as $key => $carrera) {
            echo "<li>$key - $carrera</li>";
        }        
        ?>
    </ul>
    <hr>
    <?php echo $carreras2['isc']; ?>
    <hr>
    <h3>Datos enviados a PHP</h3>
    <h6>POST</h6>
    <?php
        print_r($_POST);
    ?>
    <h6>GET</h6>
    <?php
        print_r($_GET);
    ?>
    <h6>REQUEST</h6>
    <?php
        print_r($_REQUEST);
    ?>

</body>
</html>