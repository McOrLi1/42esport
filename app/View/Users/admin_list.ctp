
<div class="paddb02">
	<h2>Gestion des utilisateurs</h2>
	<?= $this->Html->link('++ Nouvel utilisateur', array('action' => 'add')) ?>
</div>

<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Login</th>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Date de naissance</th>
			<th>Email</th>
			<th>Type</th>
			<th>Statut</th>
			<th>Action</th>
		</tr>
		<?php foreach ($users as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['username']; ?></td>
				<td><?= $d['name']; ?></td>
				<td><?= $d['lastname']; ?></td>
				<td><?= $d['birthdate']; ?></td>
				<td><?= $d['email']; ?></td>
				<td><?= $this->HAdmin->list_type($d['type']); ?></td>
				<td><?= $this->HAdmin->list_status($d['status']); ?></td>
				<td>
					<?= $this->Html->link('Editer', array('action' => 'edit', $d['id'])) ?>
					<?= $this->Html->link('Supprimer', array('action' => 'delete', $d['id']), null, 'Etes vous sûr de vouloir supprimer cet utilisateur ?') ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
