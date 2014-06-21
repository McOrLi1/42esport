<ul class="nav nav-sidebar my-nav">
	<?= $this->HForum->sidebar_header($sidebar['level'], $sidebar['head']); ?>
	<?= $this->HForum->sidebar_title($sidebar['level'], $sidebar['head']); ?>
	<?php if (isset($sidebar['choices'])): ?>
		<?php foreach ($sidebar['choices'] as $k => $d): $d = current($d); ?>
			<?= $this->HForum->sidebar_choice($sidebar['level'], $d, $sidebar['current']); ?>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
