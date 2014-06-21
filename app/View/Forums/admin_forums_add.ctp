<div class="paddb02">
	<h2>Gestion des forums : Ajouter un forum</h2>
	<?= $this->Html->link('<< Gestion des forums', array('action' => 'forums_list')); ?>
	<br>
</div>
<?= $this->Form->create('Forum'); ?>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('name', array('label' => 'Nom du forum')); ?>
<?= $this->Form->input('timestamp', array('type' => 'hidden', 'default' => time())); ?>
<?= $this->Form->end(array('label' => 'Ajouter ce fofo!', 'class' => 'btn btn-primary')); ?>
