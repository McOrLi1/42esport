<?= '<div class="alert '.(isset($notif_clr) && $notif_clr == 'Red' ? 'alert-danger' : 'alert-success').'" onclick="$(this).slideUp()">'; ?>
	<button type="button" class="close" aria-hidden="true">&times;</button>
	<?= $message; ?>
</div>
