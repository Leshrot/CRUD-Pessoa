<?php
error_reporting(0);
ini_set('display_errors', 0);

include("../dbconnect.php");

if(isset($_GET['cd_prvd'])){
    $Id = $_GET['cd_prvd'];

?>

    <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alterar Produtos Vendidos</h4>
    </div>

        <div class="modal-body">
        <center> 
            <div class="wrap">
                <select name="AltVenda" form="UpdateProdutoVenda" class="custom-select form-control">
                    <?php

                    include("dbconnect.php");

                    $query = "SELECT cd_venda FROM Venda";

                    $stmt = $db_conn->prepare($query);
                    if($stmt->execute()) {
                        $stmt->bind_result($cd_venda);

                        while($stmt->fetch()) {
                        printf("<option value=". $cd_venda .">". $cd_venda ."</option>");
                        } 
                    }
                    ?>
                </select>
            </div>
            <div class="wrap">
                <select name="AltProduto" form="UpdateProdutoVenda" class="custom-select form-control">
                    <?php

                    $query = "SELECT cd_produto, nm_produto FROM Produto";

                    $stmt = $db_conn->prepare($query);
                    if($stmt->execute()) {
                        $stmt->bind_result($cd_prod, $nm_prod);

                        while($stmt->fetch()) {
                        printf("<option value=". $cd_prod .">". $nm_prod ."</option>");
                        } 
                    }
                    ?>
                </select>
            </div>
        </center> 
        <form name="UpdateProdutoVenda" id="UpdateProdutoVenda" method='post' action="alterar.php">
            <div class="row Prod">
                <center>
                <?php
                /*$query = "SELECT qt_produto FROM = Produto_has_venda
                    where cd_produto_has_venda = ?";
                    $stmt = $db_conn->prepare($query);
                    $stmt->bind_param("i", $Id);
                    $stmt->execute();
                    $stmt->bind_result($qt_produto);

                    while($stmt->fetch()) {*/
                ?>
                <input type="hidden" name="AltId" value="<?= $Id; ?>" required />
                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Quantidade"
                        name="AltQuantidade" 

                        />
                    </div>
                    <button type="submit" name="UpdatePrvd" class="btn btn-create btn-lg btn-block" value="UpdatePrvd"><span class="glyphicon glyphicon-ok"></span> Alterar </button>
                </center>
            </div>

        </form>
        <?php /*}*/
        }
        ?>      
        </div>
    </div>
    </div>