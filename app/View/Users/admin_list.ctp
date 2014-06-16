<div class="paddb02">
	<h2>Gestion des utilisateurs</h2>
	<?= $this->Html->link('++ Ajouter un utilisateur', array('controller' => 'users', 'action' => 'add')) ?>
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
				<td>
				<?php
					echo '<span class="label ';
					switch ($d['type']) {
						case "Admin": echo 'label-success'; break;
						case "User": echo 'label-default'; break;
					}
					echo '">'
				?>
				<?= $d['type']; ?>
				</td>
				<td>
				<?php
					echo '<span class="label ';
					switch ($d['status']) {
						case "Normal": echo 'label-info'; break;
						case "Banni": echo 'label-danger'; break;
						case "Suspendu": echo 'label-default'; break;
						case "En attente": echo 'label-warning'; break;
					}
					echo '">'
				?>
				<?= $d['status']; ?>
				</span>
				</td>
				<td>
					<?= $this->Html->link('Editer', array('controller' => 'users', 'action' => 'edit', $d['id'])) ?>
					<?= $this->Html->link('Supprimer', array('controller' => 'users', 'action' => 'delete', $d['id'])) ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
