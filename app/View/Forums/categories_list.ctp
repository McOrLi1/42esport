<?= $this->HForum->header('categories', array('forum' => $forum)); ?>
<?php foreach ($categories as $k => $d): $d = current($d); ?>
	<?= $this->HForum->content('categories', $d); ?>
<?php endforeach; ?>
