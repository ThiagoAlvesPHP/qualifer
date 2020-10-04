<?php $this->menuAdmin(); ?>
<div class="container">
	<h3>Cadastro de Categorias</h3>
	<div class="well">
		<form method="POST">
			<label>CATEGORIA</label>
			<input type="text" name="nome" value="<?=$get['nome']; ?>" class="form-control" required="">
			<br>
			<button class="btn  btn-contato">ATUALIZAR</button>
		</form>
	</div>
</div>