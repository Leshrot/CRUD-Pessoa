<link rel="stylesheet" href="css/table.css">

<?php $lista = $_GET['lista']; ?>

    <div style="position: relative;">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                  <?php
                  if ($lista == 1) {
                  ?>
                    <h3 class="panel-title"> Tabela de usuários</h3>
                  <?php } elseif ($lista == 2) { ?>
                    <h3 class="panel-title"> Tabela de fornecedores</h3>
                  <?php } elseif ($lista == 3) { ?>
                    <h3 class="panel-title"> Tabela de produtos</h3>
                  <?php } ?>
                  </div>
                  <div class="col col-xs-6 text-right">
                  <?php
                  if ($lista == 1) {
                  ?>
                  <button type='button' class='btn btn-sm btn-primary' href="#create_user" data-toggle="modal"><i class='fa fa-plus-circle'></i> Criar usuário</button>
                  <?php } elseif ($lista == 2) { ?>
                  <button type='button' class='btn btn-sm btn-primary' href="#create_forn" data-toggle="modal"><i class='fa fa-plus-circle'></i> Criar fornecedor</button>
                  <?php } elseif ($lista == 3) { ?>
                  <button type='button' class='btn btn-sm btn-primary' href="#create_prod" data-toggle="modal"><i class='fa fa-plus-circle'></i> Cadastrar produto</button>
                  <?php } ?>
                  </div>
                </div>
              </div>
              <?php
              include("listar.php");
              ?>
                </table>
              
              <?php
              $Pagina = $_GET['pagina'];
              if ($lista == 1) { 
              ?>
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Página <?= $Pagina ?> de 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="painel_list_user.php?lista=1&pagina=<?php if($Pagina != 1) { echo $Pagina - 1; } ?>">Anterior</a></li>
                      <li><a href="painel_list_user.php?lista=1&pagina=1">1</a></li>
                      <li><a href="painel_list_user.php?lista=1&pagina=2">2</a></li>
                      <li><a href="painel_list_user.php?lista=1&pagina=3">3</a></li>
                      <li><a href="painel_list_user.php?lista=1&pagina=4">4</a></li>
                      <li><a href="painel_list_user.php?lista=1&pagina=5">5</a></li>
                      <li><a href="painel_list_user.php?lista=1&pagina=<?php if($Pagina != 5) { echo $Pagina + 1; } ?>">Próximo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php } elseif ($lista == 2) { ?>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Página <?= $Pagina ?> de 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="painel_list_forn.php?lista=2&pagina=<?php if($Pagina != 1) { echo $Pagina - 1; } ?>">Anterior</a></li>
                      <li><a href="painel_list_forn.php?lista=2&pagina=1">1</a></li>
                      <li><a href="painel_list_forn.php?lista=2&pagina=2">2</a></li>
                      <li><a href="painel_list_forn.php?lista=2&pagina=3">3</a></li>
                      <li><a href="painel_list_forn.php?lista=2&pagina=4">4</a></li>
                      <li><a href="painel_list_forn.php?lista=2&pagina=5">5</a></li>
                      <li><a href="painel_list_forn.php?lista=2&pagina=<?php if($Pagina != 5) { echo $Pagina + 1; } ?>">Próximo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php } elseif ($lista == 3) { ?>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Página <?= $Pagina ?> de 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="painel_list_prod.php?lista=3&pagina=<?php if($Pagina != 1) { echo $Pagina - 1; } ?>">Anterior</a></li>
                      <li><a href="painel_list_prod.php?lista=3&pagina=1">1</a></li>
                      <li><a href="painel_list_prod.php?lista=3&pagina=2">2</a></li>
                      <li><a href="painel_list_prod.php?lista=3&pagina=3">3</a></li>
                      <li><a href="painel_list_prod.php?lista=3&pagina=4">4</a></li>
                      <li><a href="painel_list_prod.php?lista=3&pagina=5">5</a></li>
                      <li><a href="painel_list_prod.php?lista=3&pagina=<?php if($Pagina != 5) { echo $Pagina + 1; } ?>">Próximo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
        </div>
