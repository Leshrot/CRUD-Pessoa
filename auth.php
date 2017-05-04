<?php
session_start();

echo $_SESSION["Adm"];

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();

	$pessoa->auth($_SESSION["Adm"]);
?>