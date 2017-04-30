<?php

$db_conn = mysqli_connect("localhost","root","","u573658764_papel") 
            or
die("Não foi possível conectar:" . mysqli_connect_errno());

$Id = $_GET['cd_pessoa'];
echo $Id;

$query = "SELECT cd_pessoa, nm_nome, cd_telefone, ds_endereco, vl_salario, cd_rg, cd_cpf, cd_adm FROM pessoa";
$stmt = $db_conn->prepare($query);
$stmt->execute();
$stmt->bind_result($cd_pessoa, $nm_nome, $cd_telefone, $ds_endereco, $vl_salario, $cd_rg, $cd_cpf, $cd_adm);

// EXIBE PESSOA
while($stmt->fetch()) {
?>


<div class="modal fade" id="myModal2"  role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
<!-- ALTERACAO DE USUARIO -->
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alterar Usuário</h4>
    </div>

        <div class="modal-body">

        <form action="alterar.php" name="UpdatePessoa" id="UpdatePessoa" method='post'>
            <div class="row Pessoa">
                <div class="col-md-6">

                    <input type="hidden" name="AltId" value="<?php $Id ?>" required />
                    
                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg" 
                        placeholder="Nome" 
                        name="AltNome"
                        value="<?php $nm_nome ?>"
                        required />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="RG" 
                        name="AltRG"
                        value="<?php $cd_rg ?>"
                        required />
                    </div>

                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg" 
                        placeholder="CPF" name="AltCpf"
                        value="<?php $cd_cpf ?>"
                        required />

                    </div>
                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Telefone"
                        name="AltTelefone" 
                        value="<?php $cd_telefone ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                         placeholder="Endereço"
                         name="AltEndereco" />
                    </div>
                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Salario"
                        name="AltSalario" 
                        value="<?php $vl_salario?>" />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        id="inputText"
                        class="form-control input-lg"
                        placeholder="Login"
                        name="AltLogin"
                        required />
                    </div>

                    <div class="form-group">    
                        <input type="password"
                        id="inputPass" 
                        class="form-control input-lg" 
                        placeholder="Senha" 
                        name="AltSenha" 
                        required />
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="AltAdm" value="<?php $cd_adm ?>">Administrador
                        </label>
                    </div>

                    <button type="submit" name="updateUser" class="btn btn-success btn-lg btn-block" value="updateUser"><span class="glyphicon glyphicon-ok"></span> Alterar </button>
                </div>
            </div>

        </form>

        <?php } ?>
        </div>
    </div>
    </div>
</div>