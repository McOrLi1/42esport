<div class="paddb02">
	<h2>Gestion des forums : Editer un forum</h2>
	<?= $this->Html->link('<< Gestion des forums', array('action' => 'forums_list')); ?>
	<br>
</div>
<?= $this->Form->create('Forum'); ?>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'),	'class' => 'form-control')) ?>
<?= $this->Form->input('name', array('label' => 'Nom du forum')); ?>
<?= $this->Form->input('created', array('label' => 'Date de creation (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end(array('label' => 'Valider la modif', 'class' => 'btn btn-primary')); ?>
