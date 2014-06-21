<div class="paddb02">
	<h2>Forum <?= $forum['name'] ?></h2>
	<h3>Categorie <?= $category['name']; ?></h3>
	<h3>Gestion des categories : Editer une categorie</h3>
	<?= $this->Html->link('<< Gestion des categories', array('action' => 'categories_list', $forum['id'])); ?>
	<br>
</div>
<?= $this->Form->create('Thread'); ?>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'),	'class' => 'form-control')) ?>
<?= $this->Form->input('name', array('label' => 'Nom de la categorie')); ?>
<?= $this->Form->input('created', array('label' => 'Date de creation (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end(array('label' => 'Valider la modif', 'class' => 'btn btn-primary')); ?>
