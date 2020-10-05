<?php $this->menuAdmin(); ?>
<div class="container">
	<h3>Atualizar dados do Produto</h3>
	<div class="well">
		<?php if(!empty($error)): ?>
			<div class="alert alert-danger">
				<b>Alerta!</b>
				Formato de imagem não aceito!
			</div>
		<?php endif; ?>
		<form method="POST" enctype="multipart/form-data">
			<label>NOME</label>
			<input type="text" name="nome" value="<?=$produto['nome']; ?>" class="form-control" required="">
			<div class="row">
				<div class="col-sm-2">
					<?php if(!empty($produto['imagem'])): ?>
						<img src="<?=BASE.'assets/img/produtos/'.$produto['imagem']; ?>" class="img-thumbnail">
					<?php else: ?>
						<img src="<?=BASE.'assets/img/produtos/nenhuma_imagem.png'; ?>" class="img-thumbnail">
					<?php endif; ?>
				</div>
				<div class="col-sm-10">
					<label>IMAGEM <small>(Formato PNG - 600 x 600)</small></label>
					<input type="file" name="imagem" class="form-control">
				</div>
			</div>
			<label>DESCRIÇÂO</label>
			<textarea name="descricao" class="form-control" required=""><?=$produto['descricao']; ?></textarea>
			<label>CATEGORIA</label>
			<select name="id_categoria" class="form-control">
				<?php foreach ($categorias as $key => $value): ?>
					<?php if(!empty($produto['id_categoria'])): ?>
						<?php if($produto['id_categoria'] == $value['id']): ?>
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
			<button class="btn  btn-contato">ALTERAR</button>
		</form>
	</div>
</div>