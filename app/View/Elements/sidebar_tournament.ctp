<?php $tournaments = $this->requestAction(array('controller' => 'tournaments', 'action' => 'to_list')); ?>
<?php foreach ($tournaments as $k => $d): $d = current($d); ?>
	<p  style="color: black;">
		<?= $this->Html->link($d['name_game'], array('controller' => 'tournaments', 'action' => 'index', $d['id'])) ?>
	</p>
<?php endforeach; ?>
