<?php $this->menuAdmin(); ?>
<div class="container">
	<h3>Cadastro de Usuários</h3>
	<div class="well">
		<?php if(!empty($error)): ?>
			<div class="alert alert-danger">
				<b>Alerta!</b>
				Este e-mail já esta cadastrado para outro usuário!
			</div>
		<?php endif; ?>
		<form method="POST">
			<label>NOME</label>
			<input type="text" name="nome" class="form-control" required="">
			<label>E-MAIL</label>
			<input type="email" name="email" class="form-control" required="">
			<label>SENHA</label>
			<input type="password" name="senha" class="form-control" required="">
			<br>
			<button class="btn  btn-contato">SALVAR</button>
		</form>
	</div>
</div>