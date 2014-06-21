<?= $this->HForum->header('thread', array('forum' => $forum, 'category' => $category)) ?>
<div class="bg">
	<?= $this->Form->create('Thread'); ?>
	<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
	<?= $this->Form->input('name', array('label' => 'Nom du nouveau sujet')); ?>
	<?= $this->Form->input('timestamp', array('type' => 'hidden', 'default' => time())); ?>
	<?= $this->Form->input('id_category', array('type' => 'hidden', 'default' => $category['id'])); ?>
	<?= $this->Form->end(array('label' => 'Ok', 'class' => 'btn btn-primary')); ?>
</div>
