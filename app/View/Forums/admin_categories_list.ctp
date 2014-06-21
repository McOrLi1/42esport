<div class="paddb02">
	<h2>Forum <?= $forum['name']; ?></h2>
	<h3>Gestion des categories</h3>
	<?= $this->Html->link('<< Gestion forums', array('forums', 'action' => 'forums_list')) ?>
	<br>
	<?= $this->Html->link('++ Nouvelle categorie', array('action' => 'categories_add', $forum['id'])) ?>
</div>
<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Crée le</th>
			<th>Sujets</th>
			<th>Actions sur la categorie</th>
		</tr>
		<?php foreach ($categories as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['name']; ?></td>
				<td><?= $d['created']; ?></td>
				<td>
					<?= $this->Html->link('Sujets de cette categorie', array('action' => 'threads_list', $d['id'])); ?>
					<?= '('.$d['nb_threads'].')' ?>
				</td>
				<td>
					<?= $this->Html->link('Editer', array('action' => 'categories_edit', $d['id'])) ?>
					<?= $this->Html->link('Supprimer', array('action' => 'categories_delete', $d['id'], $forum['id']), null, 'Etes vous sûr de vouloir supprimer ce forum ?') ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
