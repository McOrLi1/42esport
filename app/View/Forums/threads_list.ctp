<?= $this->HForum->header('threads', array('forum' => $forum, 'category' => $category)) ?>
<?php foreach ($threads as $k => $d): $d = current($d); ?>
	<?= $this->HForum->content('threads', $d);?>
<?php endforeach;?>