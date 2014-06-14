
<div class="paddb02">
<h2>Edition de profil</h2>
	<?= $this->Html->link('-> Retour au menu admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true)); ?>
	<br>
	<?= $this->Form->create('User'); ?>
</div>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('username', array('label' => 'Login')); ?>
<?= $this->Form->input('password', array('label' => 'Mot de passe')); ?>
<?= $this->Form->input('name', array('label' => 'Prénom')); ?>
<?= $this->Form->input('lastname', array('label' => 'Nom')); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('type', array('options' => array('Admin', 'SpUser'))); ?>
<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)')); ?>
<?= $this->Form->input('status', array('options' => array('Normal', 'Banni', 'Suspendu', 'En attente'))); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end(array('value' => 'Ok', 'class' => 'btn btn-primary')); ?>
