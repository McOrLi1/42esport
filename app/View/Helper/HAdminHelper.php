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

	public function list_type($type) {
		$content = '<span class="label ';
		switch ($type) {
			case "Admin": $content .= 'label-success'; break;
			case "User": $content .= 'label-default'; break;
		}
		$content .= '">'.$type.'</span>';
		return ($content);
	}

	public function list_status($status) {
		$content = '<span class="label ';
		switch ($status) {
			case "Normal": $content .= 'label-info'; break;
			case "Banni": $content .= 'label-danger'; break;
			case "Suspendu": $content .= 'label-default'; break;
			case "En attente": $content .= 'label-warning'; break;
		}
		$content .= '">'.$status.'</span>';
		return ($content);
	}

}
