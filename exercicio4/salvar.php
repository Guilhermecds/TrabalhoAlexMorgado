<?php

if((isset($_POST["login"]) && isset($_POST["senha"])) || (empty($_POST["login"]) && empty($_POST["senha"]))) {
    session_start();
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $session = array(
        'login' => $login,
        'senha' => $senha
    );
    $_SESSION["usuario"] = $session;
    print_r($_SESSION["usuario"]); 
    exit;
}
print_r("ajustar os 2 campos");
?>