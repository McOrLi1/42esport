<?php $tournaments = $this->requestAction(array('controller' => 'tournaments', 'action' => 'to_list')); ?>
<?php foreach ($tournaments as $k => $d): $d = current($d); ?>
	<tr>
		<?= $this->Html->link($d['name_game'], array('controller' => 'tournaments', 'action' => 'index', $d['id'])) ?>

	</tr>
<?php endforeach; ?>
