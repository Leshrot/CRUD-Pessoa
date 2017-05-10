<?php $lista = $_GET['lista']; ?>

<div class="content-wrapper" style="min-height: 279px; padding-top:50px;">
  <section class="content-header">
    <div class="row">
      <div class="col-md-8">
      <?php if ($lista == 1){ ?>
        <h3 style="margin-top: 5px"><i class="fa fa-folder"></i> Usuários
        </h3>
      <?php } elseif ($lista == 2){ ?>
        <h3 style="margin-top: 5px"><i class="fa fa-folder"></i> Fornecedores
        </h3>
      <?php } elseif ($lista == 3){ ?>
        <h3 style="margin-top: 5px"><i class="fa fa-folder"></i> Produtos
        </h3>
      <?php } ?>
      </div>
      <div class="col-md-4">
        <div class="pull-right">
         <a href ="#" class="btn btn-primary"><i class='fa fa-plus-circle'></i> Não clique</a>
        </div>
      </div>
    </div>

  </section>
    <div class="col-md-12">
      <div id="alertTarget">
      </div>
    </div>
  <section class="content">

  <div class="row">
      <div class="col-md-12">
        <div class="box box-primary" style="padding-top:15px">
          <div class="box-body">

      <div>
      <div class="row">
          <div class="col-md-9">
          <?php if ($lista == 1){ ?>
          <form name="search" method="get" action="painel_list_user.php">
              <div class="input-group col-md-5">
              <input name="busca" type="text" class="form-control" placeholder="Insira ID, nome ou CPF">
              <input type="hidden" name="pagina" value='<?= $_GET['pagina']; ?>'>
              <input type="hidden" name="lista" value='<?= $_GET['lista']; ?>'>
                <span class="input-group-btn">
                  <button class="btn btn-default" type="input"><i class="fa fa-search" aria-hidden="true"></i>
                  Buscar
                  </button>
                </span>
              </div>
          </form>
          <?php } elseif ($lista == 2){ ?>
          <form name="search" method="get" action="painel_list_forn.php">
              <div class="input-group col-md-5">
              <input name="busca" type="text" class="form-control" placeholder="Insira ID, nome ou CPF">
              <input type="hidden" name="pagina" value='<?= $_GET['pagina']; ?>'>
              <input type="hidden" name="lista" value='<?= $_GET['lista']; ?>'>
                <span class="input-group-btn">
                  <button class="btn btn-default" type="input"><i class="fa fa-search" aria-hidden="true"></i>
                  Buscar
                  </button>
                </span>
              </div>
          </form>
          <?php } elseif ($lista == 3){ ?>
          <form name="search" method="get" action="painel_list_prod.php">
              <div class="input-group col-md-5">
              <input name="busca" type="text" class="form-control" placeholder="Insira ID, nome ou codebar">
              <input type="hidden" name="pagina" value='<?= $_GET['pagina']; ?>'>
              <input type="hidden" name="lista" value='<?= $_GET['lista']; ?>'>
                <span class="input-group-btn">
                  <button class="btn btn-default" type="input"><i class="fa fa-search" aria-hidden="true"></i>
                  Buscar
                  </button>
                </span>
              </div>
          </form>
          <?php } ?>
          </div><!-- /input-group -->
      <div class="col-md-3">
          <div class="pull-right">
              <p>Div da direita</p>
              </div>
          </div>
      </div>

      <?php     
    if ($lista == 1) { 
      if(isset($_GET['busca'])){
      $Buscar = $_GET['busca'];
      $Id = $Buscar;
      $Nome = $Buscar;
      $Cpf = $Buscar;
      ?>
      <div class="row ng-hide">
          <div class="col-md-12" style="margin-bottom: 20px;">
              Com <?= $pessoa->getNumrows($Id, $Nome, $Cpf); ?>
              linhas encontradas.
          </div>
      </div>
      <?php } ?> 
    <?php
    } elseif ($lista == 2) {
      if(isset($_GET['busca'])){
      $Buscar = $_GET['busca'];
      $Id = $Buscar;
      $Nome = $Buscar;
      $Cnpj = $Buscar;
      ?>
      <div class="row ng-hide">
          <div class="col-md-12" style="margin-bottom: 20px;">
              Com <?= $fornecedor->getNumrows($Id, $Nome, $Cpf); ?>
              linhas encontradas.
          </div>
      </div>
      <?php } ?> 
    <?php 
    } elseif ($lista == 3) {
      if(isset($_GET['busca'])){
      $Buscar = $_GET['busca'];
      $Id = $Buscar;
      $Nome = $Buscar;
      $CodBarra = $Buscar;
      ?>
      <div class="row ng-hide">
          <div class="col-md-12" style="margin-bottom: 20px;">
              Com <?= $produto->getNumrows($Id, $Nome, $CodBarra); ?>
              linhas encontradas.
          </div>
      </div>
      <?php } ?> 
    <?php } ?> 


    <?php include("view/table.php"); ?>

  </div></div></div>
      </div>
          </div>
        </div> 
      </div>
  </div>
  </section>

      </div>