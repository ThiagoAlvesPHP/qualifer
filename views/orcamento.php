<?php $this->menu(); ?>
<!-- <header>
	<img src="<?=BASE.'assets/img/produtos/fundo.png'; ?>">
</header> -->
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="conteudo">
				ORÇAMENTO
				<br><br>
				<form method="POST">
					<div class="row">
						<div class="col-sm-6">
							<p>PRODUTO</p>
							<select class="form-control">
								<option>Produtos 1</option>
							</select>
						</div>
						<div class="col-sm-2">
							<p>QUANT</p>
							<!-- <button class="btn btn-contato btn-mais">-</button> -->
							<input type="number" min="1" name="" class="form-control">
							<!-- <button class="btn btn-contato btn-menos">+</button> -->
						</div>
						<div class="col-sm-4">
							<p>Ação</p>
							<button class="btn btn-contato">ADICIONAR</button>
						</div>
					</div>
					<hr>

					<br><br>
					<div class="row">
						<div class="col-sm-6">
							<p>NOME</p>
							<input type="text" name="cliente" class="form-control" required="">
						</div>
						<div class="col-sm-6">
							<p>EMPRESA</p>
							<input type="text" name="empresa" class="form-control" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p>E-MAIL</p>
							<input type="email" name="email" class="form-control" required="">
						</div>
						<div class="col-sm-6">
							<p>TELEFONE</p>
							<input type="text" name="telefone" class="form-control" required="">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>