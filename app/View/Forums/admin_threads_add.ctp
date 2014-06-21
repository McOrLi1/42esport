<div class="paddb02">
	<h2>Forum <?= $forum['name'] ?></h2>
	<h3>Categorie <?= $category['name'] ?></h3>
	<h3>Gestion des categories : Ajouter une categorie</h3>
	<?= $this->Html->link('<< Gestion des sujets', array('action' => 'threads_list', $forum['id'])); ?>
	<br>
</div>
<?= $this->Form->create('Thread'); ?>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'), 'class' => 'form-control')) ?>
<?= $this->Form->input('name', array('label' => 'Nom de la categorie')); ?>
<?= $this->Form->input('timestamp', array('type' => 'hidden', 'default' => time())); ?>
<?= $this->Form->input('id_category', array('type' => 'hidden', 'default' => $category['id'])); ?>
<?= $this->Form->end(array('label' => 'Ajouter ce debat!', 'class' => 'btn btn-primary')); ?>
