<div class="paddb02">
	<h2>Crée un tournois</h2>
	<br>
	<?= $this->Form->create('User'); ?>
</div>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('name_game', array('label' => 'Nom du jeux')); ?>
<?= $this->Form->input('name_tournament', array('label' => 'Nom du tournois')); ?>

<?= $this->Form->input('start_tournament', array('label' => 'Date & heure de début de tournois (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?> 
<!-- 'placeholder' => '(yyyy-mm-dd hh:mm:ss)' -->
<?= $this->Form->input('end_tournament', array('label' => 'Date & heure de fin de tournois (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>

<?= $this->Form->input('start_register', array('label' => 'Date & heure de début de tournois (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<?= $this->Form->input('end_register', array('label' => 'Date & heure de fin de tournois (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>


<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)', 'type' => 'text')); ?>
<?= $this->Form->input('status', array('type' => 'select', 'options' => array('Normal' => 'Normal', 'Banni' => 'Banni' , 'Suspendu' => 'Suspendu' , 'En attente' => 'En attente' ))); ?>
<?= $this->Form->end(array('label' => 'Ajouter ce mec!', 'class' => 'btn btn-primary')); ?>
