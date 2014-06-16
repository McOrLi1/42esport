<div class="paddb02">
	<h2>Gestion des forums</h2>
	<?= $this->Html->link('++ Ajouter un forum', array('controller' => 'forums', 'action' => 'add')) ?>
</div>
<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Nom du forum</th>
			<th>Created</th>
			<th>Nombre de categories</th>
			<th>Action</th>
		</tr>
		<?php foreach ($forums as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['name']; ?></td>
				<td><?= $d['created']; ?></td>
				<td><?= $d['nb_categories']; ?></td>
				<td>
					<?= $this->Html->link('Editer', array('controller' => 'forums', 'action' => 'forums_edit', $d['id'])) ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
