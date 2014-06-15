<ul class="nav nav-sidebar my-nav">
	<li>
		<h2 class="radius">
			<?= $this->Html->link('Espace Admin', array('controller' => 'pages', 'action' => 'index'));  ?>
		</h2>
	</li>
	<?php if (isset($sidebar) && $sidebar === 'users') {
			echo '<li class="active">';
			$class = 'active';
		} else {
			echo '<li>';
			$class = '';
		}; ?>
		<?= $this->Html->link('Gestion des users', array('controller' => 'users', 'action' => 'list'), array('class' => $class));
	?>
	</li>
</ul>
