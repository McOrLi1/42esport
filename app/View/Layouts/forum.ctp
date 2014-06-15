<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset(); ?>
	<title><?= $title_for_layout; ?></title>
	<?= $this->Html->meta('icon'); ?>
	<?= $this->Html->css('bootstrap'); ?>
	<?= $this->Html->css('style1'); ?>
	<?= $this->fetch('meta'); ?>
	<?= $this->fetch('css'); ?>
	<?= $this->fetch('script');	?>
</head>
<body class="admin-bg">

	<div class="container">

		<div class="row">
			<div class="col-md-3 padd02">
				<div style=" margin-bottom:30px;">
					<a href="/"><img src="http://www.dianevarjacques.com/wp-content/uploads/2013/09/logo-42.jpg"/></a>
				</div>
			</div>

			<div class="col-md-offset-3 col-md-6 nav-bg my-nav-g">
				<?= $this->element('homebar'); ?>
			</div>

		</div>

		<div class="row">
			<div class="col-md-3 sidebar">
				<?= $this->element('admin_sidebar'); ?>
			</div>
			<div class="col-md-9">
				<?= $this->Session->flash(); ?>
				<?= $this->fetch('content'); ?>
			</div>
		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?= $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>