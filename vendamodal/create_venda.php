<div class="modal fade" id="create_venda" style="margin-top:50px;" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Venda</h4>
    </div>
    
        <div class="modal-body">

        <form name="CreateVendas" id="CreateVendas" method='post'>
            <div class="row Prod">
                <center> 
                    
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
                        placeholder="Pagamento"
                        name="Pagamento"
                        required />
                    </div>
                    <button type="submit" name="CreateVenda" class="btn btn-create btn-lg btn-block" value="CreateVenda"><span class="glyphicon glyphicon-ok"></span> Cadastrar </button>
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