<?php foreach ($threads as $k => $d): $d = current($d); ?>
	<?= $this->HForum->content($d, 'posts');?>
<?php endforeach;?>