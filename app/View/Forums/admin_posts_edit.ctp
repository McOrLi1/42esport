<div class="paddb02">
	<h2>Forum <?= $forum['name'] ?></h2>
	<h3>Categorie <?= $category['name']; ?></h3>
	<h3>Sujet <?= $thread['name']; ?></h3>
	<h3>Gestion des posts : Editer une post</h3>
	<?= $this->Html->link('<< Gestion des posts', array('action' => 'posts_list', $thread['id'])); ?>
	<br>
</div>
<?= $this->Form->create('Post'); ?>
<?php $this->Form->inputDefaults(array('div' => array('class' => 'form-group'),	'class' => 'form-control')) ?>
<?= $this->Form->input('content', array('label' => 'Content')); ?>
<?= $this->Form->input('created', array('label' => 'Date de creation (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<?= $this->Form->input('modified', array('label' => 'Date de modif (yyyy-mm-dd hh:mm:ss)', 'type' => 'text')); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end(array('label' => 'Valider la modif', 'class' => 'btn btn-primary')); ?>
