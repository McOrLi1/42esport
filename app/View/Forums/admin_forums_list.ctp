<div class="paddb02">
	<h2>Gestion des forums</h2>
	<?= $this->Html->link('++ Nouveau forum', array('action' => 'forums_add')) ?>
</div>
<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Crée le</th>
			<th>Categories</th>
			<th>Actions sur le forum</th>
		</tr>
		<?php foreach ($forums as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['name']; ?></td>
				<td><?= $d['created']; ?></td>
				<td>
					<?= $this->Html->link('Categories de ce forum', array('action' => 'categories_list', $d['id'])); ?>
					<?= '('.$d['nb_categories'].')' ?>
				</td>
				<td>
					<?= $this->Html->link('Editer', array('action' => 'forums_edit', $d['id'])) ?>
					<?= $this->Html->link('Supprimer', array('action' => 'forums_delete', $d['id']), null, 'Etes vous sûr de vouloir supprimer ce forum ?') ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
