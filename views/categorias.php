<?php $this->menuAdmin(); ?>
<div class="container">
	<h3>Cadastro de Categorias</h3>
	<div class="well">
		<?php if(!empty($error)): ?>
			<div class="alert alert-danger">
				<b>Alerta!</b>
				Esta já esta cadastrada!
			</div>
		<?php endif; ?>
		<form method="POST">
			<label>CATEGORIA</label>
			<input type="text" name="nome" class="form-control" required="">
			<br>
			<button class="btn  btn-contato">SALVAR</button>
		</form>
	</div>
</div>