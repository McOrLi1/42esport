<div class="paddb02">
	<h2>Gestion des tournois</h2>
	<?= $this->Html->link('++ Nouveau tournoi', array('action' => 'add')) ?>
</div>

<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th> 
			<th>Nom du jeu</th>
			<th>Nom du tournoi</th>
			<th>Début du tournoi</th>
			<th>Fin du tournoi</th>
			<th>Début des inscriptions</th>
			<th>Fin des inscriptions</th>
			<th>Inscrits max</th>
			<th>Action</th>
			<!--
			<th>Gamer max</th>
			<th>Remplace max</th>
			<th>Price</th>
			<th>Description</th>
			<th>Tweet off</th>
			<th>Tweet flood</th>
			<th>Id_forum</th>
			-->
		</tr>
		<?php foreach ($tournaments as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['name_game']; ?></td>
				<td><?= $d['name_tournament']; ?></td>
				<td><?= $d['start_tournament']; ?></td>
				<td><?= $d['end_tournament']; ?></td>
				<td><?= $d['start_register']; ?></td>
				<td><?= $d['end_register']; ?></td>
				<td><?= $d['inscrits_max']; ?></td>
				<!--
				<td><?= $d['gamer_max']; ?></td>
				<td><?= $d['remplace_max']; ?></td>
				<td><?= $d['price']; ?></td>
				
				<td><?= $d['description']; ?></td>
				<td><?= $d['tweet_off']; ?></td>
				<td><?= $d['tweet_flood']; ?></td>
				<td><?= $d['id_forum']; ?></td>
				-->
				<td>
					<?= $this->Html->link('Editer', array('action' => 'edit', $d['id'])) ?>
					<?= $this->Html->link('Supprimer', array('action' => 'delete', $d['id']), null, 'Etes vous sûr de vouloir supprimer ce tournoi ?') ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>