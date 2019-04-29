<?php

include 'init.php';

    $username = $_POST['username'];
    $senha = $_POST['senha'];

if(login($username, $senha)) {
    redirect('index-logado.php');
}
redirect('reg_login.php?mes_log=Email ou senha incorreto');
?>