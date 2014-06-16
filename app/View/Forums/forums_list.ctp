<?php foreach ($forums as $k => $d): $d = current($d); ?>
<?php echo $this->HForum->content($d, 'categories'); ?>
<?php endforeach; ?>
