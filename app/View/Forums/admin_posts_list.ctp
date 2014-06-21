<div class="paddb02">
	<h2>Forum <span class="my-txt-blue"><?= $forum['name']; ?></span></h2>
	<h3>Categorie <span class="my-txt-blue"><?= $category['name']; ?></span></h3>
	<h3>Sujet <span class="my-txt-blue"><?= $thread['name']; ?></span></h3>
	<h3>Gestion des posts</h3>
	<?= $this->Html->link('<< Gestion des sujets', array('action' => 'threads_list', $category['id'])) ?>
</div>
<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Content</th>
			<th>Crée le</th>
			<th>Modifié le</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($posts as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['content']; ?></td>
				<td><?= $d['created']; ?></td>
				<td><?= $d['modified']; ?></td>
				<td>
					<?= $this->Html->link('Editer', array('action' => 'posts_edit', $d['id'])) ?>
					<?= $this->Html->link('Supprimer', array('action' => 'posts_delete', $d['id'], $thread['id']), null, 'Etes vous sûr de vouloir supprimer ce post ?') ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
