<div class="modal fade" id="create_prvd" style="margin-top:50px;" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Venda</h4>
    </div>

        <div class="modal-body">
        <center> 
            <div class="wrap">
                <select name="Venda" form="CreateProdutoVenda" class="custom-select form-control">
                    <?php

                    include("dbconnect.php");

                    $query = "SELECT cd_venda FROM Venda";

                    $stmt = $db_conn->prepare($query);
                    if($stmt->execute()) {
                        $stmt->bind_result($cd_venda);

                        while($stmt->fetch()) {
                        printf("<option value=". $cd_venda .">". $cd_venda ."</option>");
                        /*printf("<input type='hidden' name='qtd_prod'
                        value=".$cd_forn."/>");*/
                        } 
                    }
                    ?>
                </select>
            </div>
            <div class="wrap">
                <select name="Produto" form="CreateProdutoVenda" class="custom-select form-control">
                    <?php

                    $query = "SELECT cd_produto, qt_produto, nm_produto FROM Produto";

                    $stmt = $db_conn->prepare($query);
                    if($stmt->execute()) {
                        $stmt->bind_result($cd_prod, $qtd_prod, $nm_prod);

                        while($stmt->fetch()) {
                        printf("<option value=". $cd_prod .">". $nm_prod ."</option>");
                        } 
                    }
                    ?>
                </select>
            </div>
        </center> 
        <form name="CreateProdutoVenda" id="CreateProdutoVenda" method='post'>
            <div class="row Prod">
                <center> 
                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Quantidade"
                        name="Quantidade" />
                    </div>
                    <button type="submit" name="CreatePrvd" class="btn btn-create btn-lg btn-block" value="CreatePrvd"><span class="glyphicon glyphicon-ok"></span> Cadastrar </button>
                </center> 
            </div>

            <?php
            include_once("cadastrar.php");
            ?>

        </form>
        </div>
    </div>
    </div>
</div>