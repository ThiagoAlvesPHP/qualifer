<?php $this->menuAdmin(); ?>
<div class="container">
	<h3>Cadastro de Produtos</h3>
	<div class="well">
		<?php if(!empty($error)): ?>
			<div class="alert alert-danger">
				<b>Alerta!</b>
				Formato de imagem não aceito!
			</div>
		<?php endif; ?>
		<form method="POST" enctype="multipart/form-data">
			<label>NOME</label>
			<input type="text" name="nome" value="<?=(!empty($_POST['nome']))?$_POST['nome']:''; ?>" class="form-control" required="">
			<label>IMAGEM <small>(Formato PNG - 600 x 600)</small></label>
			<input type="file" name="imagem" class="form-control">
			<label>DESCRIÇÂO</label>
			<textarea name="descricao" class="form-control" required=""><?=(!empty($_POST['nome']))?$_POST['nome']:''; ?></textarea>
			<label>CATEGORIA</label>
			<select name="id_categoria" class="form-control">
				<?php foreach ($categorias as $key => $value): ?>
					<?php if(!empty($_POST['id_categoria'])): ?>
						<?php if($_POST['id_categoria'] == $value['id']): ?>
							<option selected="" value="<?=$value['id']; ?>"><?=$value['nome']; ?></option>
						<?php else: ?>
							<option value="<?=$value['id']; ?>"><?=$value['nome']; ?></option>
						<?php endif; ?>
					<?php else: ?>
						<option value="<?=$value['id']; ?>"><?=$value['nome']; ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
			<br>
			<button class="btn  btn-contato">SALVAR</button>
		</form>
	</div>
</div>