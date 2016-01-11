<?php
    $inventario = array(
        array('nombre' => 'TV', 'precio' => 600),
        array('nombre' => 'movil', 'precio' => 300),
        array('nombre' => 'PC', 'precio' => 1800)
    );
    include("crearSesion.php");
    include("autenticacion.php");
    include("permisos.php");

    function mostrarArticulos($inventario,$accesoUsr){
        echo "<table class='izquierda'>";
        echo "<tr><th>Artículo</th><th>Precio<br>(Eu)</th></tr>";
        foreach ($inventario as $articulo) {
            echo "<tr>";
            echo "<td>" . $articulo['nombre'] . "</td><td>" . $articulo['precio'] . "</td>";
            if ($accesoUsr) {
                echo "<td id='no_borde'><form action='index.php' method='post'><input type='submit' id='azul' class='submit' name='add' value='Añadir " . $articulo['nombre'] . "'></form></td></tr>";
            }
        }
        echo "</table>";
    }

    function anadirCarrito($inventario){
        if(isset($_POST['add'])){
            foreach ($inventario as $art) {
                if($_POST['add'] == "Añadir " . $art['nombre']){
                    array_push($_SESSION['carrito'],$art);
                    echo "<br><h5>Añadido el articulo ".$art['nombre']." al carrito</h5>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Tienda Online</title>
        <link rel="stylesheet" href="../css/estilo.css">
    </head>
    <body>
        <h1>Tienda On-Line con Autenticación de Usuarios</h1>
        <?php include("formAutenticacion.php");
            echo "<br>";
            mostrarArticulos($inventario,$clienteAcceso);
            anadirCarrito($inventario);
            if($clienteAcceso){
                $precioTotal = 0;
                echo "<h3>Tu carrito incluye: </h3>";
                foreach ($_SESSION['carrito'] as $item) {
                    echo "<p>Artículo: " . $item['nombre'] . " => Precio: " . $item['precio'] . " euros</p>";
                    $precioTotal += $item['precio'];
                }
                echo "<h4>Precio Total: " . $precioTotal . "</h4>";
            }
            if($adminAcceso){
                echo "<div id='derecha'><br>Añadir artículo a la tienda:<br><br>";
                echo "<form action='index.php' method='post'>
                        Nombre artículo:<input type='text' name='productoAnad'><br><br>
                        Precio artículo: <input type='text' name='precio'><br><br>
                        <input type='submit' id='azul' class='submit' name='anadirProd' value='Añadir a Tienda'></form>";
                echo "<br><br>Eliminar artículo de la tienda:<br><br>";
                echo "<form action='index.php' method='post'>
                        Nombre artículo:<input type='text' name='productoElim'><br><br>
                        <input type='submit' id='rojo' class='submit' name='eliminarProd' value='Eliminar de Tienda'></form></div>";
                if(isset($_POST['anadirProd'])){
                    array_push($_SESSION['tienda'],array('nombre' => $_POST['productoAnad'],'precio' => $_POST['precio']));
                }
                if(isset($_POST['eliminarProd'])){
                    foreach($_SESSION['tienda'] as $key => $item){
                        if($item['nombre'] == $_POST['productoElim']){
                            unset($_SESSION['tienda'][$key]);
                        }
                    }
                }
                echo "<br><div class='izquierda'><h3>Tienda del usuario admin</h3>";
                foreach ($_SESSION['tienda'] as $item) {
                    echo "<p>Nombre: " . $item['nombre'] . " - Precio: " . $item['precio'] . "</p>";
                }
                echo "</div>";
            }
        ?>
        </br><a href="../../vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../../../index.html">Volver a Inicio</a></p>
    </body>
</html>