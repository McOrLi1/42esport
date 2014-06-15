<?php $this->layout = 'forum'; ?>
<?php foreach ($forums as $k => $d): $d = current($d); ?>
<?php echo $this->Fofo->content($d['name'], $d['created'], $d['id']); ?>
<?php endforeach; ?>
