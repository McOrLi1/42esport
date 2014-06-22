<ul class="nav nav-sidebar_admin my-nav">
	<li><h2 class="radius"><?= $this->Html->link('Espace Admin', array('controller' => 'pages', 'action' => 'index'));  ?></h2></li>
	<?= $this->HAdmin->sidemenu_choice('Gestion des utilisateurs', 'users', (isset($sidebar_admin) ? $sidebar_admin : null), 'users', 'list'); ?>
	<?= $this->HAdmin->sidemenu_choice('Gestion des forums', 'forums', (isset($sidebar_admin) ? $sidebar_admin : null), 'forums', 'forums_list'); ?>
	<?= $this->HAdmin->sidemenu_choice('Gestion des tournois', 'tournaments', (isset($sidebar_admin) ? $sidebar_admin : null), 'tournaments', 'list'); ?>
</ul>
