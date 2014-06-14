<?php
	echo '<div class="alert ';
	if (isset($notif_clr) && $notif_clr === 'Red') {
		echo 'alert-danger';
	}
	else {
		echo 'alert-success';
	}
	echo '">';
?>
	<button type="button" class="close" aria-hidden="true" onclick="$(this).parent().slideUp()">&times;</button>
	<?= $message; ?>
</div>
