<?php
//pide la conexion
require_once('bombones.php');
    $produ=$_POST['aidi'];

    $sql="SELECT Id,Nombre,Precio,Descripcion,Imagen FROM mamut WHERE Id = $produ";
    $envio=mysqli_query($con,$sql);
    while ( $env=mysqli_fetch_array($envio)) {
        
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="color.css">
        <title>Cocholate</title>
    </head>
    <body>
        <header>
            <h1><?php echo($env['Nombre'])?></h1>
        </header>
        <main>
            <label for="aidi">Ingrese el aidi</label>
            <input type="text" name="aidi" id="guane">
            <aside><img src="<?php echo($env['Imagen'])?>"></aside>
            

        </main>

        <?php}?>
        <footer>
            <p>Octavio Humberto López Sánchez</p>
        </footer>
    </body>
</html>