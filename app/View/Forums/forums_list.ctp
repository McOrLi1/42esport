<?= $this->HForum->header('forums', null) ?>
<?php foreach ($forums as $k => $d): $d = current($d); ?>
	<?= $this->HForum->content('forums', $d); ?>
<?php endforeach; ?>
