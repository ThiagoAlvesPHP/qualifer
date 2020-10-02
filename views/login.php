<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=320px">
  <title>Login</title>
  <link rel="icon" href="<?=BASE.'assets/img/cabecalho/logo.png'; ?>" type="image/x-icon"/>
  <meta property="og:image" content="<?=BASE.'assets/img/cabecalho/logo.png'; ?>">
  <meta name="author" content="Albicod">
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?=BASE; ?>admin/assets/css/style.css" type="text/css" />
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<br><br>
			<div class="alert alert-success">
				<center>
					<img class="img-responsive" src="<?=BASE.'assets/img/cabecalho/logo.png'; ?>">
					<hr>
				</center>
				<form method="POST">
					<label>Login:</label>
					<input type="text" name="login" autofocus="" class="form-control" required="">
					<label>Senha:</label>
					<input type="password" name="pass" class="form-control" required="">
					<br>
					<button class="btn btn-success btn-lg btn-block" value="getResponse">Logar</button>
				</form>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

<script type="text/javascript" src="<?=BASE; ?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?=BASE; ?>assets/bootstrap.js"></script>
</body>
</html>