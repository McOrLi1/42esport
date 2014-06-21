<?= $this->HForum->header('posts', array('forum' => $forum, 'category' => $category, 'thread' => $thread)) ?>
<?php foreach ($posts as $k => $d): $d = current($d); ?>
	<?= $this->HForum->content('posts', $d);?>
<?php endforeach;?>
<?= $this->element('post_add'); ?>
