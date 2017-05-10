<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    # INSTANCIANDO PESSOA
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

    if(isset($_GET['busca'])){
    $Buscar = $_GET['busca'];
    }
    $Pagina = $_GET['pagina'];
    $Lista = $_GET['lista'];

    if ($Lista == 1) {
    ?>
    <!-- MONTANDO ESTRUTURA DA TABELA PESSOA -->
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs">ID</th>
            <th>Nome</th>
            <th>RG</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Salario</th>
            <th>Admin</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php 
        if(isset($Buscar) == null){
            $pessoa->pageselect($Pagina);
        }
    
        if(isset($Buscar) != null){
            $Id = $Buscar;
            $Nome = $Buscar;
            $Cpf = $Buscar;
            $pessoa->search($Id, $Nome, $Cpf);
        }
    } elseif ($Lista == 2) {
    ?>
    <!-- MONTANDO ESTRUTURA DA TABELA FORNECEDOR -->
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs">ID</th>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php
        if(isset($Buscar) == null){
        $fornecedor->pageselect($Pagina);
        }

        if(isset($Buscar) != null){
            $Id = $Buscar;
            $Nome = $Buscar;
            $Cnpj = $Buscar;
            $fornecedor->search($Id, $Nome, $Cnpj);
        }
    } elseif ($Lista == 3) {
    ?>
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs">ID</th>
            <th>Nome</th>
            <th>Código de Barra</th>
            <th>Descricao</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php 
        if(isset($Buscar) == null){
            $produto->pageselect($Pagina);
        }
        
        if(isset($Buscar) != null){
            $Id = $Buscar;
            $Nome = $Buscar;
            $CodBarra = $Buscar;
            $produto->search($Id, $Nome, $CodBarra);
        }
    } elseif ($Lista == 4) {
    ?>
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs">ID</th>
            <th>Data</th>
            <th>Pagamento</th>
            <th>Fornecedor</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php     
        if(isset($Buscar) == null){
            $compra->pageselect($Pagina);
        }
    
    } elseif ($Lista == 5) {
    ?>
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs"> ID</th>
            <th>ID Compra </th>
            <th>ID Fornecedor</th>
            <th>ID Produto</th>
            <th>Quantidade</th>
            <th>Nome</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php     
        if(isset($Buscar) == null){
            $compraproduto->pageselect($Pagina);
        }

    } elseif ($Lista == 6) {
    ?>
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs">ID</th>
            <th>Data</th>
            <th>Pagamento</th>
            <th>Pessoa</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php
        if(isset($Buscar) == null){
            $venda->pageselect($Pagina);
        }

    } elseif ($Lista == 7) {
    ?>
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs">ID</th>
            <th>Data</th>
            <th>Justificativa</th>
            <th>Pessoa</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php
        if(isset($Buscar) == null){
            $ajuste->pageselect($Pagina);
        }

    } elseif ($Lista == 8) {
    ?>
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs"> ID</th>
            <th>Produto </th>
            <th>Venda</th>
            <th>Nome produto</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php     
        if(isset($Buscar) == null){
            $produtovenda->pageselect($Pagina);
        }

    } elseif ($Lista == 9) {
    ?>
    <table class="table table-striped table-list">
    <thead>
        <tr>
            <th class="hidden-xs"> ID</th>
            <th>Ajuste</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th style="width:150px;"><center><em class="fa fa-cog"></em></center></th>
        </tr> 
    </thead>
    <?php     
        if(isset($Buscar) == null){
            $ajusteproduto->pageselect($Pagina);
        }

    }
    

?>



