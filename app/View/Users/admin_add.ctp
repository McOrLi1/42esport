Admin add page
<br>
<?= $this->Html->link('Revenir au menu admin', array('controller' => 'pages', 'action' => 'index')); ?>
<br>
<?= debug($user); ?>
<?= $this->Form->create('User'); ?>
<?= $this->Form->input('username'); ?>
<?= $this->Form->input('password'); ?>
<?= $this->Form->input('name'); ?>
<?= $this->Form->input('lastname'); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('type'); ?>
<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)')); ?>
<?= $this->Form->input('status'); ?>
<?= $this->Form->end('Ok'); ?>
