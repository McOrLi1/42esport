<ul class="navbar-nav" style="padding: 0px;">
	<?= $this->HLayout->homebar_elem(null, 'glyphicon-home', 'left', '/'); ?>
	<?= $this->HLayout->homebar_elem('Log_in', 'glyphicon-user', 'mid', $this->app->url(array(
		'controller'	=> 'users',
		'action'		=> 'profile',
		'admin'			=> false))); ?>
	<?= $this->HLayout->homebar_elem('Page_Admin', 'glyphicon-cog', 'mid', $this->App->url(array(
		'controller'	=> 'pages',
		'action'		=> 'index',
		'admin'			=> true))); ?>
	<?= $this->HLayout->homebar_elem('Forums', 'glyphicon-list', 'mid', $this->App->url(array(
		'controller'	=> 'forums',
		'action'		=> 'forums_list', $this->params['prefix'] => false))); ?>
</ul>
