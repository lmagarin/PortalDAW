<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Buscaminas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div id="derecha">
        <h1>Buscaminas</h1>
        <a href="../../CerrarSesion.php">Cerrar Juego</a>
    </div>
        <?php
            define("TAM", 10);
            define("NUMMINAS", 10);
            define("NUMCASILLAS", TAM*TAM);

            if(!isset($_SESSION['tablero'])){
                $_SESSION['tablero'] = array();
                $_SESSION['visible'] = array();
                crearTablero();       
            }

            if(isset($_GET['fila'])){
                $filEntrada = $_GET['fila'];
                $colEntrada = $_GET['columna'];
                clicCasilla($filEntrada, $colEntrada);
            }
            mostrarVisible();

            function crearTablero(){
                for ($fila=0; $fila < TAM; $fila++) { 
                    for ($columna=0; $columna < TAM; $columna++) { 
                        $_SESSION['tablero'][$fila][$columna] = 0;
                        $_SESSION['visible'][$fila][$columna] = 0;
                    }
                }

                $contador = 0;
                while($contador < NUMMINAS){
                    do{
                        $fila = mt_rand(0,9);
                        $columna = mt_rand(0,9);
                    }while($_SESSION['tablero'][$fila][$columna] == 9);
                    $contador++;
                    $_SESSION['tablero'][$fila][$columna] = 9;
                    
                    for ($f=max(0,$fila-1); $f <= min(TAM-1,$fila+1); $f++) { 
                        for ($c=max(0,$columna-1); $c <= min(TAM-1,$columna+1); $c++) { 
                            if($_SESSION['tablero'][$f][$c] != 9){
                                $_SESSION['tablero'][$f][$c]++;
                            }
                        }
                    }
                }
            }

            function comprobarGanador(){
                $logicGanador = false;
                $numVisibles = 0;
                foreach ($_SESSION['visible'] as $fila) {
                    foreach ($fila as $valor) {
                        if($valor != 0){
                            $numVisibles++;
                        }
                    }
                }
                if($numVisibles == NUMCASILLAS - NUMMINAS){
                    $logicGanador = true;
                }
                return $logicGanador;
            }

            function mostrarVisible(){
                echo "<table id='tabla'>";
                for ($fila=0; $fila < TAM; $fila++) { 
                    echo "<tr>";
                    for ($columna=0; $columna < TAM; $columna++) { 
                        echo "<td>";
                        if($_SESSION['visible'][$fila][$columna] == 1){
                            if($_SESSION['tablero'][$fila][$columna] == 0){
                                echo "<img src='banderaBlanca.png'/>";
                            }
                            else {
                                if($_SESSION['tablero'][$fila][$columna] == 9){
                                    echo "<img src='bomba.png'/>";
                                    mostrarBombas();
                                }
                                else{
                                    echo $_SESSION['tablero'][$fila][$columna];
                                }
                            }
                        }
                        else {
                            echo "<a href='buscaminas.php?fila=".$fila."&columna=".$columna."'>";
                            echo "<img src='interrogacion.png'/>";
                            echo "</a>";
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }

            function clicCasilla($f, $c){
                if($_SESSION['visible'][$f][$c] == 0){
                    $_SESSION['visible'][$f][$c] = 1;
                    if($_SESSION['tablero'][$f][$c] == 9){
                        mostrarBombas();
                    }
                    else {
                        if(comprobarGanador()){
                            echo "<h2>Has ganado</h2>";
                        }
                        else {
                            if($_SESSION['tablero'][$f][$c] == 0){
                                for ($if=max(0,$f-1); $if <= min(TAM-1,$f+1); $if++) { 
                                    for ($ic=max(0,$c-1); $ic <= min(TAM-1,$c+1); $ic++) { 
                                        clicCasilla($if, $ic);
                                    }
                                }
                            }
                        }
                    }
                }
            }

            function mostrarBombas(){
                for ($i=0; $i < TAM; $i++) { 
                    for ($j=0; $j < TAM; $j++) { 
                        if($_SESSION['tablero'][$i][$j] == 9){
                            $_SESSION['visible'][$i][$j] = 1;
                        }
                    }
                }
                ?>
                <script type="text/javascript" src="codigoJS.js"></script>
                <?php
            }
        ?>
    </body>
</html>