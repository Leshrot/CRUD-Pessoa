<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    // INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();
    // INSTANCIANDO FORNECEDOR
    require_once("classes/fornecedor.php");
    $fornecedor = new fornecedor();
    // INSTANCIANDO PRODUTO
    require_once("classes/produto.php");
    $produto = new produto();
    // INSTANCIANDO COMPRA
    require_once("classes/compra.php");
    $compra = new compra();
    // INSTANCIANDO COMPRAPRODUTO
    require_once("classes/compraproduto.php");
    $compraproduto = new compraproduto();
    // INSTANCIANDO VENDA
    require_once("classes/venda.php");
    $venda = new venda();
    // INSTANCIANDO AJUSTE
    require_once("classes/ajuste.php");
    $ajuste = new ajuste();
    // INSTANCIANDO PRODUTOVENDA
    require_once("classes/produtovenda.php");
    $produtovenda = new produtovenda();
    // INSTANCIANDO AJUSTEPRODUTO
    require_once("classes/ajusteproduto.php");
    $ajusteproduto = new ajusteproduto();


    // RECEBE O ID DA PESSOA POR GET
    If(isset($_GET['cd_pessoa'])){
	$Id = $_GET['cd_pessoa'];
    echo $Id;
	
	$pessoa->delete($Id);
	}

    // RECEBE O ID DO FORNECEDOR POR GET
	If(isset($_GET['cd_forn'])){
	$Id = $_GET['cd_forn'];
    echo $Id;

	$fornecedor->delete($Id);
	}

    // RECEBE O ID DO PRODUTO POR GET
    If(isset($_GET['cd_produto'])){
    $Id = $_GET['cd_produto'];
    echo $Id;

    $produto->delete($Id);
    }

    // RECEBE O ID DA COMPRA POR GET
    If(isset($_GET['cd_compra'])){
    $Id = $_GET['cd_compra'];
    echo $Id;

    $compra->delete($Id);
    }

    // RECEBE O ID DA COMPRAPRODUTO POR GET
    If(isset($_GET['cd_copr'])){
    $Id = $_GET['cd_copr'];
    echo $Id;

    $compraproduto->delete($Id);
    }

    // RECEBE O ID DA VENDA POR GET
    If(isset($_GET['cd_venda'])){
    $Id = $_GET['cd_venda'];
    echo $Id;

    $venda->delete($Id);
    }

    // RECEBE O ID DO AJUSTE POR GET
    If(isset($_GET['cd_ajuste'])){
    $Id = $_GET['cd_ajuste'];
    echo $Id;

    $ajuste->delete($Id);
    }

    // RECEBE O ID DO PRODUTOVENDA POR GET
    If(isset($_GET['cd_prvd'])){
    $Id = $_GET['cd_prvd'];
    echo $Id;

    $produtovenda->delete($Id);
    }

    // RECEBE O ID DO AJUSTEPRODUTO POR GET
    If(isset($_GET['cd_ajprod'])){
    $Id = $_GET['cd_ajprod'];
    echo $Id;

    $ajusteproduto->delete($Id);
    }
?>