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

	<div class="navbar bg">
		<h5>navbar</h5>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-md-3 padd02">
				<div style=" margin-bottom:30px;">
					<img src="http://www.dianevarjacques.com/wp-content/uploads/2013/09/logo-42.jpg"/>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 sidebar">
				<ul class="nav nav-sidebar my-nav">
					<li><h2 class="radius">Espace Admin</h2></li>
					<li><a href="">Nav item</a></li>
					<li><a href="">Nav item</a></li>
					<li><a href="">Nav item</a></li>
					<li><a class="radius" href="">Nav item</a></li>
				</ul>
			</div>
			<div class="col-md-8">
				<div class="bg">
					<?= $this->fetch('content'); ?>
				</div>
				<?= $this->Session->flash(); ?>
			</div>
		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?= $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>