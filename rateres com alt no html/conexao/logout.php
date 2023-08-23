<?php
    session_start();
    unset($_SESSION["usuario_Logado"]);
    header("location:../paginas/home.php");
?>