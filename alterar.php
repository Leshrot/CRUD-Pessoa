<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();
    # INSTANCIANDO FORNECEDOR
    require_once("classes/fornecedor.php");
    $fornecedor = new fornecedor();
    // INSTANCIANDO PRODUTO
    require_once("classes/produto.php");
    $produto = new produto();

    // RECEBENDO VALORES DO FORMULARIO 
	if (isset($_POST["UpdateUser"])) {
        $Id = $_POST['AltId'];
        $Nome = $_POST['AltNome'];
        $Telefone = $_POST['AltTelefone'];
        $Endereco = $_POST['AltEndereco'];
        $Salario = $_POST['AltSalario'];
        $Login = $_POST['AltLogin'];
        $Senha = $_POST['AltSenha'];
        $RG = $_POST['AltRG'];
        $Cpf = $_POST['AltCpf'];
        $Adm = isset($_POST['AltAdm']);
        
    $pessoa->update($Nome, $Telefone, $Endereco, $Salario, $Login, $Senha, $RG, $Cpf, $Adm, $Id);
    }

    // RECEBENDO VALORES DO FORMULÁRIO USUARIO
    if (isset($_POST["UpdateForn"])) { 
        $Id = $_POST['AltId'];
        $NomeForn = $_POST['AltNome'];
        $CnpjForn = $_POST['AltCNPJ'];
        $EnderecoForn = $_POST['AltEndereco'];
        $TelForn = $_POST['AltTelefone'];
        $EmailForn = $_POST['AltEmail'];
    }

        if (isset($CnpjForn)){
        $fornecedor->update($CnpjForn, $NomeForn, $EnderecoForn, $TelForn, $EmailForn, $Id);
        }

        // RECEBENDO VALORES DO FORMULÁRIO PRODUTO
    if (isset($_POST["UpdateProd"])) { 
        $Id = $_POST['AltId'];
        $NomeProd = $_POST['AltNome'];
        $CodBarra = $_POST['AltCodBarra'];
        $DescProd= $_POST['AltDescricao'];
        $QtdProd = $_POST['AltQuantidade'];
        $ValorProd = $_POST['AltValor'];
        $CategoriaProd = $_POST['AltCategoria'];
    }

        if (isset($CodBarra)){
            $produto->update($NomeProd, $CodBarra, $DescProd, $QtdProd, $ValorProd, $CategoriaProd, $Id);
        }

?>