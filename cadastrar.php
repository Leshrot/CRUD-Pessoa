<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    include("dbconnect.php");

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
    // INSTANCIANDO COMPRA-PRODUTO
    require_once("classes/compraproduto.php");
    $compraproduto = new compraproduto();
    // INSTANCIANDO VENDA
    require_once("classes/venda.php");
    $venda = new venda();
    // INSTANCIANDO AJUSTE
    require_once("classes/ajuste.php");
    $ajuste = new ajuste();
    // INSTANCIANDO COMPRA-PRODUTO
    require_once("classes/produtovenda.php");
    $produtovenda = new produtovenda();
    // INSTANCIANDO AJUSTE-PRODUTO
    require_once("classes/ajusteproduto.php");
    $ajusteproduto = new ajusteproduto();

    // RECEBENDO VALORES DO FORMULÁRIO PESSOA
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
    }
        if (isset($Login, $Cpf)){
            $pessoa->insert($Nome, $Telefone, $Endereco, $Salario, $Login, $Senha, $RG, $Cpf, $Adm);
        }

    // RECEBENDO VALORES DO FORMULÁRIO USUARIO
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

    // RECEBENDO VALORES DO FORMULÁRIO PRODUTO
    if (isset($_POST["CreateProd"])) { 
        $NomeProd = $_POST['Nome'];
        $CodBarra = $_POST['CodBarra'];
        $DescProd= $_POST['Descricao'];
        $QtdProd = $_POST['Quantidade'];
        $ValorProd = $_POST['Valor'];
        $CategoriaProd = $_POST['Categoria'];
    }

        if (isset($CodBarra)){
            $produto->insert($CodBarra, $NomeProd, $DescProd, $QtdProd, $ValorProd, $CategoriaProd);
        }

    // RECEBENDO VALORES DO FORMULÁRIO COMPRA
    if (isset($_POST["CreateCompra"])) { 
        $Data = $_POST['Data'];
        $Pagamento = $_POST['Pagamento'];
        $Fornecedor= $_POST['Fornecedor'];
    }

        if (isset($Data)){
            $compra->insert($Data, $Pagamento, $Fornecedor);
        }

    // RECEBENDO VALORES DO FORMULÁRIO COMPRA-PRODUTO
    if (isset($_POST["CreateCopr"])) { 
        $Compra = $_POST['Compra'];
        $Produto = $_POST['Produto'];
    }

        if (isset($Compra)){

            $query = "SELECT cd_compra, Fornecedor_cd_fornecedor FROM Compra 
            WHERE cd_compra = ?";

            $stmt = $db_conn->prepare($query);
            $stmt->bind_param("i", $Compra);
            if($stmt->execute()) {
                $stmt->bind_result($cd_compra, $cd_forn);
            }
            while($stmt->fetch()) {}
            $stmt->close();

            $query = "SELECT cd_produto, qt_produto, nm_produto FROM Produto
            WHERE cd_produto LIKE ?
            ";

            $stmt = $db_conn->prepare($query);
            $stmt->bind_param("i", $Produto);
            if($stmt->execute()) {
                $stmt->bind_result($cd_prod, $qtd_prod, $nm_prod);
            }
            while($stmt->fetch()) {}
            $stmt->close();

        $compraproduto->insert($cd_compra, $cd_forn, $cd_prod, $qtd_prod, $nm_prod);
        }


    // RECEBENDO VALORES DO FORMULÁRIO VENDA
    if (isset($_POST["CreateVenda"])) { 
        $Data = $_POST['Data'];
        $Pagamento = $_POST['Pagamento'];
        $Pessoa= $_SESSION['ID'];
    }

        if (isset($Data)){
            $venda->insert($Data, $Pagamento, $Pessoa);
        }

    // RECEBENDO VALORES DO FORMULÁRIO VENDA
    if (isset($_POST["CreateAjuste"])) { 
        $Data = $_POST['Data'];
        $Justificativa = $_POST['Justificativa'];
        $Pessoa= $_SESSION['ID'];
    }

        if (isset($Data)){
            $ajuste->insert($Data, $Justificativa, $Pessoa);
        }

    // RECEBENDO VALORES DO FORMULÁRIO PRODUTO-VENDA
    if (isset($_POST["CreatePrvd"])) { 
        $Venda = $_POST['Venda'];
        $Produto = $_POST['Produto'];
        $qtd_prod = $_POST['Quantidade'];
    }

        if (isset($Venda, $Produto)){

            $query = "SELECT cd_produto, nm_produto, vl_produto, qt_produto FROM Produto
            WHERE cd_produto LIKE ?
            ";

            $stmt = $db_conn->prepare($query);
            $stmt->bind_param("i", $Produto);
            if($stmt->execute()) {
                $stmt->bind_result($cd_prod, $nm_prod, $vl_prod, $qtd_total);
            }
            while($stmt->fetch()) {}
            $stmt->close();

        if($qtd_prod < $qtd_total){
            $vl_venda = $qtd_prod * $vl_prod; 
            $produtovenda->insert($Venda, $cd_prod, $nm_prod, $vl_venda, $qtd_prod);
        } else {
            echo "Quantidade requerida maior do que disponível no estoque";
        }

    }

    // RECEBENDO VALORES DO FORMULÁRIO AJUSTE-PRODUTO
    if (isset($_POST["CreateAjprod"])) { 
        $Ajuste = $_POST['Ajuste'];
        $Produto = $_POST['Produto'];
        $qtd_prod = $_POST['Quantidade'];
    }

        if (isset($Ajuste, $Produto)){
            $ajusteproduto->insert($Ajuste, $Produto, $qtd_prod);
        }

 

?>