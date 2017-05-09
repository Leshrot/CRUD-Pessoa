<?php
session_start();

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();
    
	# RECEBENDO DADOS DO LOGIN
    if (isset($_POST["Logar"])) { 
	$Login=$_POST["User"];
	$Senha=$_POST["Password"];

	$Pessoa->login($Login,$Senha);
	}
?>