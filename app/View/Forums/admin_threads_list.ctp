<div class="paddb02">
	<h2>Forum <span class="my-txt-blue"><?= $forum['name']; ?></span></h2>
	<h3>Categorie <span class="my-txt-blue"><?= $category['name']; ?></span></h3>
	<h3>Gestion des sujets</h3>
	<?= $this->Html->link('<< Gestion categories', array('action' => 'categories_list', $forum['id'])) ?>
	<br>
	<?= $this->Html->link('++ Nouveau sujet', array('action' => 'threads_add', $category['id'])) ?>
</div>
<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Crée le</th>
			<th>Posts</th>
			<th>Actions sur le sujet</th>
		</tr>
		<?php foreach ($threads as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['name']; ?></td>
				<td><?= $d['created']; ?></td>
				<td>
					<?= $this->Html->link('Modifier les posts de ce sujet', array('action' => 'posts_list', $d['id'])); ?>
					<?= '('.$d['nb_posts'].')' ?>
				</td>
				<td>
					<?= $this->Html->link('Editer', array('action' => 'threads_edit', $d['id'])) ?>
					<?= $this->Html->link('Supprimer', array('action' => 'threads_delete', $d['id'], $category['id']), null, 'Etes vous sûr de vouloir supprimer ce forum ?') ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
