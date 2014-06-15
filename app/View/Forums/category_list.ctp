<?php $this->layout = 'forum' ?>
<?php foreach ($categories as $k => $d): $d = current($d); ?>
	<?= $this->Fofo->content($d, 'threads'); ?>
<?php endforeach; ?>
