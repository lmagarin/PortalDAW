<?php
        echo "<h5>" . $errorAut . "</h5>
            <form action='index.php' method='post'>
                Usuario:<input type='text' name='usr'><br><br>
                Password:<input type='password' name='pss'><br><br>
                <input type='submit' name='login' value='Entrar'>
            </form>";
        echo "<form action='index.php' method='post' >
                <input type='submit' name='logout' value='Cerrar Sesión'>
            </form>";
?>