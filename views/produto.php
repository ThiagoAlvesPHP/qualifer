<?php $this->menu(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="conteudo">
				<div class="row">
					<div class="col-sm-6">
						<?php if(!empty($produto['imagem'])): ?>
							<img src="<?=BASE.'assets/img/produtos/'.$produto['imagem']; ?>" class="img img-responsive">
						<?php else: ?>
							<img src="<?=BASE.'assets/img/produtos/nenhuma_imagem.png'; ?>" class="img img-responsive">
						<?php endif; ?>
					</div>
					<div class="col-sm-6">
						<h3><?=$produto['nome']; ?></h3><br>
						<p><?=$produto['descricao']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>