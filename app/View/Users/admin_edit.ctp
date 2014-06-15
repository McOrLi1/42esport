
<div class="paddb02">
<h2>Edition de profil</h2>
<<<<<<< HEAD
	<?= $this->Html->link('<< Retour au menu admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true)); ?>
=======
	<?= $this->Html->link('<< Retour gestion user', array('action' => 'list', 'admin' => true)); ?>
>>>>>>> c4b69d61b5ac38e6bf3ccdd3601dcc78d5b9dc86
	<br>
	<?= $this->Form->create('User'); ?>
</div>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('username', array('label' => 'Login')); ?>
<?= $this->Form->input('password', array('label' => 'Mot de passe')); ?>
<?= $this->Form->input('name', array('label' => 'Prénom')); ?>
<?= $this->Form->input('lastname', array('label' => 'Nom')); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('type', array('type' => 'select', 'options' => array('Admin' => 'Admin', 'User' => 'User'))); ?>
<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)')); ?>
<?= $this->Form->input('status', array('type' => 'select', 'options' => array('Normal' => 'Normal' , 'Banni' => 'Banni', 'Suspendu' => 'Suspendu' , 'En attente' => 'En attente'))); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<<<<<<< HEAD
<?= $this->Form->end(array('label' => 'Valider la modif', 'class' => 'btn btn-primary')); ?>
=======
<?= $this->Form->end(array('label' => 'Valider la modif', 'class' => 'btn btn-primary')); ?>
>>>>>>> c4b69d61b5ac38e6bf3ccdd3601dcc78d5b9dc86
