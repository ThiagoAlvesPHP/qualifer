<?php $this->menuAdmin(); ?>
<div class="container">
	<h3>Atualizar dados de Usuário</h3>
	<div class="well">
		<form method="POST">
			<label>NOME</label>
			<input type="text" name="nome" value="<?=$get['nome']; ?>" class="form-control" required="">
			<label>E-MAIL</label>
			<input type="email" name="email" value="<?=$get['email']; ?>" class="form-control" required="">
			<label>SENHA</label>
			<input type="password" name="senha" class="form-control">
			<label>Status</label><br>
			<input type="radio" name="status" <?=($get['status'] == 1)?'checked=""':''; ?> value="1">Ativo
			<input type="radio" name="status" <?=($get['status'] == 2)?'checked=""':''; ?> value="2">Inativo
			<br><br>
			<button class="btn  btn-contato">Atualizar</button>
		</form>
	</div>
</div>