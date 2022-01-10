<?php

    include_once('Sistema.php');//importando a classe sistema

    $sistema = new Sistema;

    $host = "br2l9hhkcp7hcwcstcoq-mysql.services.clever-cloud.com";//host do banco
    $dbname = "br2l9hhkcp7hcwcstcoq";//nome do banco
    $user = "ujn3v0n6czpn9llb";//usuário do banco
    $password = "CHm4dGUcdqOH20Vw3XGC";//senha do banco

    $sistema->conectar($host, $dbname, $user, $password);//conectando com o banco

?>
