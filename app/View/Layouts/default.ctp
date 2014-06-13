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
<body class="big-fat-bg">

	<div class="container">
		<?= $this->Session->flash(); ?>
	</div>

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
			<div class="col-md-3">
				<div class="jumbotron opa">
					<h3>Tournaments</h3>
				</div>
				<div class="jumbotron opa">
					<h3>Planing</h3>
				</div>
				<div class="jumbotron opa">
					<h3>Forum</h3>
				</div>
			</div>

			<div class="col-md-6">
				<div class="jumbotron">
					<h3>News</h3>
				</div>
				<div class="jumbotron">
					<h3>News</h3>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="jumbotron opa">
							<h3>News</h3>
						</div>
					</div>
					<div class="col-md-6">
						<div class="jumbotron opa">
							<h3>News</h3>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="jumbotron opa">
					<h3>Twiter</h3>
				</div>
				<div class="jumbotron opa">
					<h3>Stream</h3>
				</div>
			</div>
		</div>


	</div>

	<div class="container">
		<?= $this->fetch('content'); ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?= $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>
