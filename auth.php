<?php
echo $_SESSION["Adm"];

    // INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();


	if($pessoa->auth(isset($Adm)) == true ){
		echo "Bem vindo ao painel administrativo.";
	}
?>