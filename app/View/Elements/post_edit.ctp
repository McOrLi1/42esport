<div class="bg">
	<?= $this->Form->create('Post'); ?>
	<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
	<?= $this->Form->input('content', array('label' => 'Nouveau contenu:', 'type' => 'text')); ?>
	<?= $this->Form->input('id', array('type' => 'hidden')); ?>
	<?= $this->Form->input('id_thread', array('type' => 'hidden')); ?>
	<?= $this->Form->input('created', array('type' => 'hidden')); ?>
	<?= $this->Form->input('modified', array('type' => 'hidden', 'value' => date('Y-m-d H:i:s', time()))); ?>
	<?= $this->Form->input('id_author', array('type' => 'hidden')); ?>
	<?= $this->Form->end(array('label' => 'Ok', 'class' => 'btn btn-primary')); ?>
</div>
