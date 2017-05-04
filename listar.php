<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();
    # INSTANCIANDO FORNECEDOR
    require_once("classes/fornecedor.php");
    $fornecedor = new fornecedor();

    $Lista = $_GET['lista'];

    if ($Lista == 1){
    # MONTANDO ESTRUTURA DA TABELA PESSOA
        printf("<table class='table'>
       	       <tr>");
        printf("<th>ID</th>");
        printf("<th>Nome</th>");
        printf("<th>RG</th>");
        printf("<th>CPF</th>");
        printf("<th>TELEFONE</th>");
        printf("<th>ENDEREÇO</th>");
        printf("<th>SALARIO</th>");
        printf("<th>ADMIN</th>");
        printf("<th>COMANDOS</th>");
        printf("</tr>");

    $pessoa->select();

    } elseif ($Lista == 2) {
    # MONTANDO ESTRUTURA DA TABELA FORNECEDOR
        printf("<table class='table'>
               <tr>");
        printf("<th>ID</th>");
        printf("<th>CNPJ</th>");
        printf("<th>NOME</th>");
        printf("<th>ENDEREÇO</th>");
        printf("<th>TELEFONE</th>");
        printf("<th>EMAIL</th>");
        printf("<th>COMANDOS</th>");
        printf("</tr>");

    $fornecedor->select();

    }
?>



