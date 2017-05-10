<?php
error_reporting(0);
ini_set('display_errors', 0);

include("../dbconnect.php");

if(isset($_GET['cd_produto'])){
    $Id = $_GET['cd_produto'];

$query = "SELECT * FROM Produto
    where cd_produto = ?";
$stmt = $db_conn->prepare($query);
$stmt->bind_param("i", $Id);
$stmt->execute();
$stmt->bind_result($cd_produto, $cd_codbarra, $nm_produto, $ds_produto, $qt_produto, $vl_produto, $ds_categoria);

// EXIBE PESSOA
while($stmt->fetch()) {
?>



    <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alterar Produto</h4>
    </div>
<!-- ALTERAÇÃO DE USUARIO -->
        <div class="modal-body">
        <form name="UpdateProduto" id="UpdateProduto" action='alterar.php' method='post'>
            <div class="row Prod">
                <div class="col-md-6">

                    <input type="hidden" name="AltId" value="<?= $cd_produto; ?>" required />
                    
                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg"
                        placeholder="Nome" 
                        name="AltNome" 
                        value="<?= $nm_produto; ?>"
                        required/>
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Codebar"
                        name="AltCodBarra"
                        value="<?= $cd_codbarra; ?>"
                        required/>
                    </div>

                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg"
                        placeholder="Descricao" 
                        name="AltDescricao"
                        value="<?= $ds_produto; ?>" />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Quantidade"
                        name="AltQuantidade"
                        value="<?= $qt_produto; ?>" />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Valor"
                        name="AltValor"
                        value="<?= $vl_produto; ?>" />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Categoria"
                        name="AltCategoria"
                        value="<?= $ds_categoria; ?>" />
                    </div>

                    <button type="submit" name="UpdateProd" class="btn btn-success btn-lg btn-block" value="UpdateProd"><span class="glyphicon glyphicon-ok"></span> Cadastrar </button>
                </div>
            </div>

        </form>
        <?php }
        }
        ?>      
        </div>
    </div>
    </div>