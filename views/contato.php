<?php $this->menu(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h4>CONTATO</h4>
			<br><br>
			<form method="POST">
				<div class="row">
					<div class="col-sm-6">
						<h4>NOME</h4>
						<input type="text" name="nome" class="form-control" required="">
					</div>
					<div class="col-sm-6">
						<h4>EMAIL</h4>
						<input type="email" name="email" class="form-control" required="">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<h4>TELEFONE</h4>
						<input type="text" name="telefone" class="form-control" required="">
					</div>
					<div class="col-sm-6">
						<h4>ASSUNTO</h4>
						<input type="text" name="assunto" class="form-control" required="">
					</div>
				</div>
				<h4>MENSAGEM</h4>
				<textarea style="height: 100px;" class="form-control" name="mensagem"></textarea>
				<br>
				<center>
					<button class="btn btn-contato">ENVIAR</button>
				</center>
			</form>
			<br><br>
			<center>
				(31) 3465-9000    .    qualifer@qualifermg.com.br <br>
				Rua Cachoeira Dourada, 54 .Santa Efigênia . Belo Horizonte .MG . 30270-060
			</center>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>