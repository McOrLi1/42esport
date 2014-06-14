
<div class="paddb02">
<h2>Edition de profil</h2>
<<<<<<< HEAD
	<?= $this->Html->link('-> Retour au menu admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true)); ?>
=======
	<?= $this->Html->link('<< Retour au menu admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true)); ?>
>>>>>>> c4d435c399dccad16489f2f961f8fdda65ad2994
	<br>
	<?= $this->Form->create('User'); ?>
</div>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('username', array('label' => 'Login')); ?>
<?= $this->Form->input('password', array('label' => 'Mot de passe')); ?>
<?= $this->Form->input('name', array('label' => 'Prénom')); ?>
<?= $this->Form->input('lastname', array('label' => 'Nom')); ?>
<?= $this->Form->input('email'); ?>
<<<<<<< HEAD
<?= $this->Form->input('type', array('options' => array('Admin', 'SpUser'))); ?>
<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)')); ?>
<?= $this->Form->input('status', array('options' => array('Normal', 'Banni', 'Suspendu', 'En attente'))); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end(array('value' => 'Ok', 'class' => 'btn btn-primary')); ?>
=======
<?= $this->Form->input('type', array('type' => 'select', 'options' => array('Admin' => 'Admin', 'User' => 'User'))); ?>
<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)')); ?>
<?= $this->Form->input('status', array('type' => 'select', 'options' => array('Normal' => 'Normal' , 'Banni' => 'Banni', 'Suspendu' => 'Suspendu' , 'En attente' => 'En attente'))); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end(array('label' => 'Valider la modif', 'class' => 'btn btn-primary')); ?>
>>>>>>> c4d435c399dccad16489f2f961f8fdda65ad2994
