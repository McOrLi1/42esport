<ul class="navbar-nav" style="padding: 0px;">
	<li>
		<a href="/">
			<button type="button" style="border-radius: 0px;border-bottom-left-radius: 6px;" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-home"></span>
			</button>
		</a>
	</li>
	<li>
		<a href="/user">
			<button type="button" style="border-radius: 0px;" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-user">Log in</span>
			</button>
		</a>
	</li>
	<li>
		<?= $this->Html->link('Page admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true)); ?>
	</li>
</ul>
