<ul class="nav nav-sidebar my-nav">
	<li><h2 class="radius"><?= $this->Html->link('Espace Admin', array('controller' => 'pages', 'action' => 'index'));  ?></h2></li>
	<?= $this->HAdmin->sidemenu_choice('Gestion des utilisateurs', 'users', (isset($sidebar) ? $sidebar : null), 'users', 'list'); ?>
	<?= $this->HAdmin->sidemenu_choice('Gestion des forums', 'forums', (isset($sidebar) ? $sidebar : null), 'forums', 'forums_list'); ?>
	<?= $this->HAdmin->sidemenu_choice('Gestion des tournois', 'tournaments', (isset($sidebar) ? $sidebar : null), 'tournaments', 'list'); ?>
</ul>
