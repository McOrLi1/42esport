
<?= $this->Form->create('User'); ?>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('username', array('label' => 'Login')); ?>
<?=	$this->Form->input('password', array('label' => 'Mot de passe', 'type' => 'password')); ?>
<?= $this->Form->end(array('label' => 'Connexion', 'class' => 'btn btn-primary')); ?>
