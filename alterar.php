<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # INSTANCIANDO PESSOA
    require_once("classes/pessoa.php");
    $pessoa = new pessoa();
    
    # RECEBENDO VALORES DO FORMULARIO 
	if (isset($_POST["AlterUser"])) {
        $Id = $_POST['AltId'];
        $Nome = $_POST['AltNome'];
        $Telefone = $_POST['AltTelefone'];
        $Endereco = $_POST['AltEndereco'];
        $Salario = $_POST['AltSalario'];
        $Login = $_POST['AltLogin'];
        $Senha = $_POST['AltSenha'];
        $RG = $_POST['AltRG'];
        $Cpf = $_POST['AltCpf'];
        $Adm = isset($_POST['Adm']);


	        $query = "UPDATE Pessoa SET nm_nome = ?, cd_telefone = ?, ds_endereco = ?, vl_salario = ?, cd_login = ?, cd_senha = ?, cd_rg = ?, cd_cpf = ?, cd_adm = ? WHERE cd_pessoa = ?";

            $stmt = $db_conn->prepare($query);

            $stmt->bind_param("sisdssiiii", $Nome, $Telefone, $Endereco, $Salario, $Login, $Senha, $RG, $Cpf, $Adm, $Id);

            if($stmt->execute()) {
                $stmt->close();
                $db_conn->close();
                echo '<script>window.location="painel_list_user.php";</script>';
            }
        //$pessoa->update($Nome, $Telefone, $Endereco, $Salario, $Login, $Senha, $RG, $Cpf, $Adm, $Id);
    }
?>