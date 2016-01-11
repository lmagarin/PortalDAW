<?php
    if($_SESSION['autenticado']){
        echo "<form action='index.php' method='post' >
                <input type='submit' id='morado' class='submit' name='logout' value='Cerrar Sesión'>
            </form>";
    }else{
        echo "<h5>" . $errorAut . "</h5>
        <form action='index.php' method='post'>
            <fieldset>
                <legend>Login</legend>
                    Usuario:<input type='text' name='usr'><br><br>
                    Password:<input type='password' name='pss'><br><br>
                    <input type='submit' id='morado' class='submit' name='login' value='Entrar'>
            </fieldset>
        </form>";
    }
?>