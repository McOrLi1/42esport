<div class="bg">
	<?= $this->Form->create('Post'); ?>
	<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
	<?= $this->Form->input('content', array('label' => 'Repondre', 'type' => 'text')); ?>
	<?= $this->Form->input('id_thread', array('type' => 'hidden', 'default' => $thread['id'])); ?>
	<?= $this->Form->input('created', array('type' => 'hidden', 'default' => date('Y-m-d h:i:s', time()))); ?>
	<?= $this->Form->input('modified', array('type' => 'hidden', 'default' => date('Y-m-d h:i:s', time()))); ?>
	<?= $this->Form->input('id_author', array('type' => 'hidden', 'default' => AuthComponent::user('id'))); ?>
	<?= $this->Form->end(array('label' => 'Ok', 'class' => 'btn btn-primary')); ?>
</div>
