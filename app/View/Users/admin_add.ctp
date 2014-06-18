<div class="paddb02">
	<h2>Gestion des utilisateurs : Ajouter un utilisateur</h2>
	<?= $this->Html->link('<< Gestion user', array('action' => 'list')); ?>
	<br>
	<?= $this->Form->create('User'); ?>
</div>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('username', array('label' => 'Login')); ?>
<?= $this->Form->input('password', array('label' => 'Mot de passe')); ?>
<?= $this->Form->input('name', array('label' => 'Prénom')); ?>
<?= $this->Form->input('lastname', array('label' => 'Nom')); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('type', array('type' => 'select', 'options' => array('User' => 'User', 'Admin' => 'Admin'))); ?>
<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)', 'type' => 'text')); ?>
<?= $this->Form->input('status', array('type' => 'select', 'options' => array('Normal' => 'Normal', 'Banni' => 'Banni' , 'Suspendu' => 'Suspendu' , 'En attente' => 'En attente' ))); ?>
<?= $this->Form->end(array('label' => 'Ajouter ce mec!', 'class' => 'btn btn-primary')); ?>
