<?php
session_start();

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $Pessoa = new Pessoa();
    
	# RECEBENDO DADOS DO LOGIN
    if (isset($_POST["Logar"])) { 
	$Login=$_POST["Login"];
	$Senha=$_POST["Password"];

	$Pessoa->login($Login,$Senha);
	}
?>