<nav id="menu" class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand li" href="<?=BASE.'admin'; ?>">
        <img width="200" src="<?=BASE.'assets/img/cabecalho/logo.png'; ?>">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      
      <ul class="nav navbar-nav navbar-left"></ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown li">
          <a href="<?=BASE,'admin/usuario_up/'.$get['id']; ?>" class="dropdown-toggle link"><?=$get['nome']; ?></a>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
            Usuários <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>admin/usuario">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>admin/usuarios_lista">Visualizar</a></li>
            <li class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
            Categorias <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>admin/categorias">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>admin/categorias_lista">Visualizar</a></li>
            <li class="divider"></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
            Produtos <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>admin/produtos">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>admin/produtos_lista">Visualizar</a></li>
            <li class="divider"></li>
          </ul>
        </li>
        <li class="dropdown li">
          <a href="<?=BASE; ?>admin/logout" class="dropdown-toggle link">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>