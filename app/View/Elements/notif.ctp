<?= '<div class="alert '.(isset($notif_clr) && $notif_clr == 'Red' ? 'alert-danger' : 'alert-success').'">'; ?>
	<button type="button" class="close" aria-hidden="true" onclick="$(this).parent().slideUp()">&times;</button>
	<?= $message; ?>
</div>
