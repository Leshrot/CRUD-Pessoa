<?php
session_start();

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();

    $pessoa->logout();

?>