<?php session_start(); ?>

<?php

    $user = $_POST[username];
    $pass = $_POST[password];
if ($user == "Manic" && $pass == "manic123")
{
    $_SESSION[user] = $user;
    setcookie("bolacha", $user, time()+60000 );
    header("Location:main.php");

}
else
{
    header("Location:erro.php");
}







?>
