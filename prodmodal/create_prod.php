<div class="modal fade" id="create_prod" style="margin-top:50px;" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Produto</h4>
    </div>
<!-- CRIAÇAO DE USUARIO -->
        <div class="modal-body">

        <form name="CreateProduto" id="CreateProduto" method='post'>
            <div class="row Prod">
                <center>
                    
                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg"
                        placeholder="Nome" 
                        name="Nome" 
                        required />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Codebar"
                        name="CodBarra"
                        required />
                    </div>

                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg"
                        placeholder="Descricao" 
                        name="Descricao"
                        required />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Quantidade"
                        name="Quantidade" />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Valor"
                        name="Valor" />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                         placeholder="Categoria"
                         name="Categoria" />
                    </div>

                    <button type="submit" name="CreateProd" class="btn btn-create btn-lg btn-block" value="CreateProd"><span class="glyphicon glyphicon-ok"></span> Cadastrar </button>
                </center>
                </div>
        </form>
        </div>
    </div>
    </div>
</div>
            <?php
            include_once("cadastrar.php");
            ?>