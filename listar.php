<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

  # INSTANCIANDO PESSOA
  require_once("classes\pessoa.php");
  $pessoa = new pessoa();

	# MONTANDO ESTRUTURA DA TABELA
      printf("<table class='table'>
       	       <tr>");
      printf("<th>ID</th>");
      printf("<th>Nome</th>");
      printf("<th>Telefone</th>");
      printf("<th>Endereço</th>");
      printf("<th>Salário</th>");
      printf("<th>RG</th>");
      printf("<th>CPF</th>");
      printf("<th>Admin</th>");
      printf("<th>Comandos</th>");
      printf("</tr>");

    # EXIBINDO LINHAS DA TABELA
	  $pessoa->select();
?>



