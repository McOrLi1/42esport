<?= '<div class="alert '; ?>
<?php
	if (isset($color)) {
		switch ($color) {
			case 'red':
				$class = 'alert-danger';
				break ;
			case 'orange':
				$class = 'alert-warning';
				break ;
		}
	} else {
		$class = 'alert-success';
	}
	echo $class;
?>
<?= '"" onclick="$(this).slideUp()">'; ?>
	<button type="button" class="close" aria-hidden="true">&times;</button>
	<?= $message; ?>
</div>
