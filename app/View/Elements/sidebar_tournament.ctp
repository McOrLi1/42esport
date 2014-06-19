<?php $tournaments = $this->requestAction(array('controller' => 'tournaments', 'action' => 'to_list')); ?>
<h3 style="text-align: center;">Tournois en cours :</h3>
<br>
<?php foreach ($tournaments as $k => $d): $d = current($d); ?>
	<p style="text-align: center";>
		<?= $d['name_game']?>
		:<br>
		<?= $this->Html->link($d['name_tournament'], array('controller' => 'tournaments', 'action' => 'index', $d['id'])) ?>
	</p>
<?php endforeach; ?>
