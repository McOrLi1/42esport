
<?= $this->form->create('User'); ?>
<?= $this->form->imput('username'); ?>
<?=	$this->form->imput('password', array('type' => 'password')); ?>
<?= $this->form->end('login'); ?>
