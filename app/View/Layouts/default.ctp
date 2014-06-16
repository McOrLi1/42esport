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
<body class="layout-bg default-bg">

	<div class="container-fluid">
		<?= $this->Session->flash(); ?>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-md-3 padd02">
				<div style="margin: 30px 0px 30px 0px;">
					<a class="logo" href="/"><img src="/app/webroot/img/esport.png"></a>
				</div>
			</div>

			<!--navbar-->
			<div class="col-md-offset-3 col-md-6 nav-bg my-nav-g">
				<?= $this->element('homebar'); ?>
			</div>
			
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="jumbotron opa">
					<?= $this->element('tournamentbar'); ?>
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
				<div class="bg">
					<?= $this->fetch('content'); ?>
				</div>
			</div>

			<div class="col-md-3">
				<div class="paddb02">
					<?= $this->element('tweet'); ?>
				</div>
				<div class="jumbotron twitch" style="padding-left: 6px; padding-right: 6px;">
					<?= $this->element('twitch'); ?>
				</div>
			</div>
			<?= $this->Session->flash(); ?>
		</div>


	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?= $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>
