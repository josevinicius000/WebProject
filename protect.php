<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['iduser'])){
        die("Você não está logado. <p><a href=\"login_screen.php\">Voltar</a></p>");
    }
?>