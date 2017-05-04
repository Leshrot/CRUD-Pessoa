<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();
    # INSTANCIANDO FORNECEDOR
    require_once("classes/fornecedor.php");
    $fornecedor = new fornecedor();

    # RECEBENDO VALORES DO FORMULÁRIO PESSOA
    if (isset($_POST["CreateUser"])) { 
        $Nome = $_POST['Nome'];
        $Telefone = $_POST['Telefone'];
        $Endereco = $_POST['Endereco'];
        $Salario = $_POST['Salario'];
        $Login = $_POST['Login'];
        $Senha = $_POST['Senha'];
        $RG = $_POST['RG'];
        $Cpf = $_POST['Cpf'];
        $Adm = isset($_POST['Adm']);

        if (isset($Login, $Cpf)){
        $pessoa->insert($Nome, $Telefone, $Endereco, $Salario, $Login, $Senha, $RG, $Cpf, $Adm);
        }
    }

    # RECEBENDO VALORES DO FORMULÁRIO USUARIO
    if (isset($_POST["CreateForn"])) { 
        $NomeForn = $_POST['Nome'];
        $CnpjForn = $_POST['CNPJ'];
        $EnderecoForn = $_POST['Endereco'];
        $TelForn = $_POST['Telefone'];
        $EmailForn = $_POST['Email'];
    }

        if (isset($CnpjForn)){
         $fornecedor->insert($CnpjForn, $NomeForn, $EnderecoForn, $TelForn, $EmailForn);
     }



?>