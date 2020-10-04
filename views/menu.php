<nav id="menu" class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand li" href="<?=BASE; ?>">
        <img width="200" src="<?=BASE.'assets/img/cabecalho/logo.png'; ?>">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      
      <ul class="nav navbar-nav navbar-left"></ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown li">
          <a href="<?=BASE.'home/empresa'; ?>" class="dropdown-toggle link">EMPRESA</a>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
            PRODUTOS <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <?php foreach ($categorias as $key => $value): ?>
              <li><a href="<?=BASE.'home/produtos/'.$value['id']; ?>"><?=$value['nome']; ?></a></li>
              <li class="divider"></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="dropdown li">
          <a href="<?=BASE.'home/servico'; ?>" class="dropdown-toggle link">SERVIÇO</a>
        </li>
        <li class="dropdown li">
          <a href="<?=BASE.'home/contato'; ?>" class="dropdown-toggle link">CONTATO</a>
        </li>
        <li class="dropdown li">
          <a href="<?=BASE.'home/orcamento'; ?>" class="dropdown-toggle link">
            ORÇAMENTO
            <img width="20" src="<?=BASE.'assets/img/cabecalho/calc.png'; ?>">
          </a>
        </li>
        <li class="dropdown li">
          <a href=""><img width="20" src="<?=BASE.'assets/img/cabecalho/search.png'; ?>"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>