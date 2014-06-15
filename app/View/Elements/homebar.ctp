<ul class="navbar-nav" style="padding: 0px;">
	<li>
		<a href="/">
			<button type="button" style="border-radius: 0px; border-bottom-left-radius: 6px;" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-home"></span>
			</button>
		</a>
	</li>
	<li>
		<a href="/user">
			<button type="button" style="border-radius: 0px;" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-user">Log_in</span>
			</button>
		</a>
	</li>
	<li>
		<?= $this->Html->tag('a', null); ?>
			<button type="button" style="border-radius: 0px; border-bottom-left-radius: 0px;" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-cog">
						<?= $this->Html->link('Page_Admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true), array('class' => 'def')); ?>
					</span>
			</button>
		</a>
	</li>
	<li>
		<?= $this->Html->tag('a', null); ?>
			<button type="button" style="border-radius: 0px; border-bottom-left-radius: 0px;" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-list">
						<?= $this->Html->link('Forums', array('controller' => 'forums', 'action' => 'forum_list'), array('class' => 'def')); ?>
					</span>
			</button>
		</a>
	</li>
</ul>
