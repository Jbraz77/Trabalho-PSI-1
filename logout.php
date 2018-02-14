<?php
    session_start();

    if(! Isset ($_SESSION[user]))
    {
        header('Location:entrada.php');
    }
    else
    {
        unset($_SESSION);
        session_destroy();
        header('Location:entrada.php');
    }
?>