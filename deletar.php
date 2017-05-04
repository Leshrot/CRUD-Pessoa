<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();
    # INSTANCIANDO FORNECEDOR
    require_once("classes/fornecedor.php");
    $fornecedor = new fornecedor();

    # RECEBE O ID DA PESSOA POR GET
    If(isset($_GET['cd_pessoa'])){
	$Id = $_GET['cd_pessoa'];
	
	$pessoa->delete($Id);
	}

    # RECEBE O ID DO FORNECEDOR POR GET
	If(isset($_GET['cd_forn'])){
	$Id = $_GET['cd_forn'];

	$fornecedor->delete($Id);
	}

?>