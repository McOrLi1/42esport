Edition de profil
<br>
<?= $this->Html->link('-> Retour au menu admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true)); ?>
<br>
<?= $this->Form->create('User'); ?>
<?= $this->Form->input('username'); ?>
<?= $this->Form->input('password'); ?>
<?= $this->Form->input('name'); ?>
<?= $this->Form->input('lastname'); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('type'); ?>
<?= $this->Form->input('birthdate', array('label' => 'Date de naissance (jj-mm-yyyy)')); ?>
<?= $this->Form->input('status'); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->end('Ok'); ?>
