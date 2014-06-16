<?php foreach ($categories as $k => $d): $d = current($d); ?>
	<?= $this->HForum->content($d, 'threads'); ?>
<?php endforeach; ?>
