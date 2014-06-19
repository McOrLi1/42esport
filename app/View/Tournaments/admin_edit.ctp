<div class="paddb02">
	<h2>Éditer un tournoi</h2>
	<?= $this->Html->link('<< Gestion des tournois', array('action' => 'list')); ?>
	<br>
	<?= $this->Form->create('Tournament'); ?>
</div>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('name_game', array('label' => 'Nom du jeux')); ?>
<?= $this->Form->input('name_tournament', array('label' => 'Nom du tournoi')); ?>
<br><hr class='hr-color'/>
<?= $this->Form->input('start_tournament', array('label' => 'Date & heure de début de tournoi (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?> 
<!-- 'placeholder' => '(yyyy-mm-dd hh:mm:ss)' -->
<?= $this->Form->input('end_tournament', array('label' => 'Date & heure de fin de tournoi (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<br>
<?= $this->Form->input('start_register', array('label' => 'Date & heure de début d\'inscription (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<?= $this->Form->input('end_register', array('label' => 'Date & heure de fin d\'inscription (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<br><hr class='hr-color'/>

<?= $this->Form->input('inscrits_max', array('label' => 'Nombre max d\'inscriptions sur ce tournoi', 'type' => 'text')); ?>
<?= $this->Form->input('gamer_max', array('label' => 'Nombre max de joueurs titulaire par équipes sur ce tournoi', 'type' => 'text')); ?>
<?= $this->Form->input('remplace_max', array('label' => 'Nombre max de joueurs remplacents par équipes sur ce tournoi', 'type' => 'text')); ?>
<br><hr class='hr-color'/>
<?= $this->Form->input('price', array('label' => 'Prix d\'entré sur le tournoi', 'type' => 'text')); ?>
<br><hr class='hr-color'/>
<?= $this->Form->input('description', array('label' => 'déscription du tournoi', 'type' => 'text')); ?>
<br><hr class='hr-color'/>
<?= $this->Form->input('tweet_off', array('label' => 'Copier / coller le code de l\'encart twitter officiel', 'type' => 'text')); ?>
<?= $this->Form->input('tweet_flood', array('label' => 'Copier / coller le code de l\'encart twitter flood', 'type' => 'text')); ?>
<br><hr class='hr-color'/>
<?= $this->Form->input('bg_url', array('label' => 'Url du background', 'type' => 'text')); ?>
<br><hr class='hr-color'/>
<?= $this->Form->input('id_forum', array('label' => 'Id du forum correspondant', 'type' => 'text')); ?>
<br>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end(array('label' => 'Valider la modif', 'class' => 'btn btn-primary')); ?>