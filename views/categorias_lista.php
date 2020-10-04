<?php $this->menuAdmin(); ?>
<div class="container">
	<h3>Lista de Usuários</h3>
	<div class="well">
		<div class="table table-responsive">			
			<table class="table">
				<thead>
					<tr>
						<th>Ação</th>
						<th>Categoria</th>
					</tr>
				</thead>
				<?php foreach ($lista as $key => $value): ?>
				<tbody>
					<tr>
						<td width="50">
							<a class="btn btn-info fas fa-edit" href="<?=BASE.'admin/categorias_up/'.$value['id']; ?>" title="Editar"></a>
						</td>
						<td><?=$value['nome']; ?></td>
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>