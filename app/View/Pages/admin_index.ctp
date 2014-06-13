

<div class="paddb02">
	<h2>Admin Home</h2>
	<?= $this->Html->link('Ajouter un user', array('controller' => 'users', 'action' => 'add')) ?>
	<br>
	<?= $this->Html->link('Revenir au home', array('action' => 'index', 'admin' => false)) ?>
</div>
<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Login</th>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Email</th>
			<th>Type</th>
			<th>Dade de naissance</th>
			<th>Statut</th>
			<th>Action</th>
		</tr>
		<?php foreach ($users as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['username']; ?></td>
				<td><?= $d['name']; ?></td>
				<td><?= $d['lastname']; ?></td>
				<td><?= $d['email']; ?></td>
				<td><?= $d['type']; ?></td>
				<td><?= $d['birthdate']; ?></td>
				<td><?= $d['status']; ?></td>
				<td>
					<?= $this->Html->link('Editer', array('controller' => 'users', 'action' => 'edit', $d['id'])) ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>