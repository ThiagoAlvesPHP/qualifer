<?php global $config; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=320px">
  <title></title>
  <link rel="icon" href="" type="image/x-icon"/>
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/style.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?=BASE; ?>assets/dataTable/dataTable.css">
  <script type="text/javascript" src="<?=BASE; ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?=BASE; ?>assets/ckeditor/ckeditor.js"></script>
</head>
<body>

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
            <?php foreach ($config['categorias'] as $key => $value): ?>
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
          <a href="<?=BASE.'home/orcamento'; ?>" class="dropdown-toggle link">ORÇAMENTO</a>
        </li>
        <li class="dropdown li">
          <a><img width="20" src="<?=BASE.'assets/img/cabecalho/calc.png'; ?>"></a>
        </li>
        <li class="dropdown li">
          <a href=""><img width="20" src="<?=BASE.'assets/img/cabecalho/search.png'; ?>"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<!-- AQUI COLOCAREMOS O FOOTER -->
<script src="<?=BASE; ?>assets/js/bootstrap.min.js"></script>
<script src="<?=BASE; ?>assets/js/jquery.mask.js"></script>
<script src="<?=BASE; ?>assets/js/Chart_js/Chart.min.js"></script>
<script src="<?=BASE; ?>assets/js/Chart_js/utils.js"></script>
<script src="<?=BASE; ?>assets/dataTable/dataTable.js"></script>
<script src="<?=BASE; ?>assets/js/config.js"></script>
<script type="text/javascript" src="<?=BASE; ?>assets/js/script.js"></script>

</body>
</html>
