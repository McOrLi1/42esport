<?php $this->layout = 'forum';?>
<?php foreach ($threads as $k => $d): $d = current($d); ?>
	<?= $this->Fofo->content($d, 'posts');?>
<?php endforeach;?>