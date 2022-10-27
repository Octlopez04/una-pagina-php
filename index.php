<?php

$con=mysqli_connect('localhost','root','','chocolate');
mysqli_set_charset($con,'utf8');

    $produ=$_POST['aidi'];

    $sql="SELECT Id,Nombre,Precio,Descripcion,Imagen FROM mamut WHERE Id = $produ";
    $envio=mysqli_query($con,$sql);
    $env=mysqli_fetch_array($envio);
        
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
            
            <aside id="im"><img src="img/<?php echo($env['Imagen'])?>"></aside>
            <aside id="des"><p><?php echo($env['Descripcion'])?></p></aside>
            <aside id="for">
                <form action="index.php" method="post">
                <label for="aidi">Ingrese el aidi</label>
                <input type="number" name="aidi" id="guane">
                <input type="submit">
                </form></aside>
        </main>

        
        <footer>
            <a href="index.html">regreso</a>
            <p>Octavio Humberto López Sánchez</p>
        </footer>
    </body>
</html>