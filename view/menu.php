<aside>
  <nav class="rad-sidebar">
  <div class='swanky'>
  <div class='swanky_wrapper'>
    
    <input id='Usuarios' name='radio' type='radio'>
    <label for='Usuarios'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/users.png'>
      <span>Gerenciar Usuário</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_user" data-toggle="modal"><a>Criar Novo Usuário</a></li>
            <li href="painel_list_user.php?lista=1&pagina=1"><a <a href="painel_list_user.php?lista=1&pagina=1">Listar Usuários</a></li>
        </ul>
      </div>
    </label>
      
    <input id='Fornecedor' name='radio' type='radio'>
    <label for='Fornecedor'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/del.png'>
      <span>Gerenciar Fornecedor</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li href="#create_forn" data-toggle="modal"><a>Novo Fornecedor</a></li>
          <li href="painel_list_forn.php?lista=2&pagina=1"><a href="painel_list_forn.php?lista=2&pagina=1">Listar Fornecedores</a></li>
        </ul>
      </div>
    </label>
      
    <input id='Produto' name='radio' type='radio'>
    <label for='Produto'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'>
      <span>Gerenciar Estoque</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_prod" data-toggle="modal"><a>Cadastrar Produto</a></li>
            <li href="painel_list_prod.php?lista=3&pagina=1"><a href="painel_list_prod.php?lista=3&pagina=1">Listar Produtos</a></li>
        </ul>
      </div>
    </label>

    <input id='Compra' name='radio' type='radio'>
    <label for='Compra'>
      <i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:10px;"></i>
      <span>Gerenciar Compra</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_compra" data-toggle="modal"><a>Cadastrar Compra</a></li>
            <li href="painel_list_compra.php?lista=4&pagina=1"><a href="painel_list_compra.php?lista=4&pagina=1">Listar Compras</a></li>
        </ul>
      </div>
    </label>

    <input id='CompraProd' name='radio' type='radio'>
    <label for='CompraProd'>
      <i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:10px;"></i>
      <span>CompraProduto</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_copr" data-toggle="modal"><a>Cadastrar CompraProduto</a></li>
            <li href="painel_list_copr.php?lista=5&pagina=1"><a href="painel_list_copr.php?lista=5&pagina=1">Listar Compras</a></li>
        </ul>
      </div>
    </label>

    <input id='Venda' name='radio' type='radio'>
    <label for='Venda'>
      <i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:10px;"></i>
      <span>Realizar Venda</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_venda" data-toggle="modal"><a>Realizar Venda</a></li>
            <li href="painel_list_venda.php?lista=6&pagina=1"><a href="painel_list_venda.php?lista=6&pagina=1">Listar Vendas</a></li>
        </ul>
      </div>
    </label>

    <input id='Ajuste' name='radio' type='radio'>
    <label for='Ajuste'>
      <i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:10px;"></i>
      <span>Realizar Ajuste</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_ajuste" data-toggle="modal"><a>Realizar Ajuste</a></li>
            <li href="painel_list_ajuste.php?lista=7&pagina=1"><a href="painel_list_ajuste.php?lista=7&pagina=1">Listar Ajuste</a></li>
        </ul>
      </div>
    </label>
    <input id='ProdVenda' name='radio' type='radio'>
    <label for='ProdVenda'>
      <i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:10px;"></i>
      <span>ProdutoVenda</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_prvd" data-toggle="modal"><a>Cadastrar ProdutoVenda</a></li>
            <li href="painel_list_prvd.php?lista=8&pagina=1"><a href="painel_list_prvd.php?lista=8&pagina=1">Listar ProdutoVenda</a></li>
        </ul>
      </div>
    </label>
    <input id='AjusteProd' name='radio' type='radio'>
    <label for='AjusteProd'>
      <i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:10px;"></i>
      <span>AjusteProduto</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
            <li href="#create_ajprod" data-toggle="modal"><a>Realizar Ajuste</a></li>
            <li href="painel_list_ajprod.php?lista=9&pagina=1"><a href="painel_list_ajprod.php?lista=9&pagina=1">Listar Ajuste</a></li>
        </ul>
      </div>
    </label>

  </div>
  </div>
  </nav>
</aside>