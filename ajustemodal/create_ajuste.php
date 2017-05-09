<div class="modal fade" id="create_ajuste" style="margin-top:50px;" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Ajuste</h4>
    </div>
    
        <div class="modal-body">
            <div class="wrap">
                <select name="Pessoa" form="CreateAjustes" class="custom-select form-control">
                    <?php

                    include("dbconnect.php");

                    $query = "SELECT cd_pessoa, nm_nome FROM Pessoa";

                    $stmt = $db_conn->prepare($query);
                    if($stmt->execute()) {
                        $stmt->bind_result($cd_pessoa, $nm_pessoa);

                        while($stmt->fetch()) {
                          printf("<option value=". $cd_pessoa .">". $nm_pessoa ."</option>");
                        } 
                    }
                    ?>
                </select>
            </div>
        <form name="CreateAjustes" id="CreateAjustes" method='post'>
            <div class="row Prod">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg"
                        placeholder="Data" 
                        name="Data" 
                        required />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Justificativa"
                        name="Justificativa"
                        required />
                    </div>

                    <button type="submit" name="CreateAjuste" class="btn btn-success btn-lg btn-block" value="CreateAjuste"><span class="glyphicon glyphicon-ok"></span> Cadastrar </button>
                </div>
            </div>

            <?php
            include_once("cadastrar.php");
            ?>

        </form>
        </div>
    </div>
    </div>
</div>