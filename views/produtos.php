<?php $this->menu(); ?>
<!-- <header>
	<img src="<?=BASE.'assets/img/produtos/fundo.png'; ?>">
</header> -->
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="conteudo">
				<?=$categoria['nome']; ?>
				<br><br>
				<div class="row">
					<?php foreach ($produtos as $key => $value): ?>
						<div class="col-sm-3">
							<a href="<?=BASE.'home/produto/'.$value['id']; ?>" class="link-produto">
								<?php if(!empty($value['imagem'])): ?>
									<img src="<?=BASE.'assets/img/produtos/'.$value['imagem']; ?>" class="img img-responsive">
								<?php else: ?>
									<img src="<?=BASE.'assets/img/produtos/nenhuma_imagem.png'; ?>" class="img img-responsive">
								<?php endif; ?>
								<br>
								<center><?=$value['nome']; ?></center>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>