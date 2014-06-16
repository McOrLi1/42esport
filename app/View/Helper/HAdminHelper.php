<?php
class HAdminHelper extends AppHelper {

	public $helpers = array('Html');

	public function sidemenu_choice($str, $op_written, $op_active, $controller, $action) {

		$content = '<li';
		$content .= ($op_written === $op_active ? ' class="active">' : '>');
		$textclass = ($op_written === $op_active ? 'active' : '');
		$content .= $this->Html->link($str, array('controller' => $controller, 'action' => $action), array('class' => $textclass));
		$content .= '</li>';
		return ($content);
	}

}
