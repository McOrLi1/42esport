<?php
class FofoHelper extends AppHelper {
	
	public $helpers = array('Html');

	public function content($data, $type) {
		switch ($type) {
			case 'categories': $action = 'category_list'; $str = 'categories'; break;
			case 'threads': $action = 'thread_list'; $str = 'sujets'; break;
			case 'posts': $action = 'posts_list'; $str = 'messages'; break;
		}
		$content = '<div class="bg">';
		$content .= '<h3>'.$this->Html->link($data['name'], array('controller' => 'forums', 'action' => $action, $data['id'])).'</h3>';
		$content .= '<p>'.$data['created'].'</p>';
		$content .= '<p>NB de '.$str.': '.$data['id'].'</p>';
		$content .= '</div>';
		return($content);
	}

	public function post($data) {
		switch ($type) {
			case 'categories': $action = 'category_list'; $str = 'categories'; break;
			case 'threads': $action = 'thread_list'; $str = 'sujets'; break;
			case 'posts': $action = 'posts_list'; $str = 'messages'; break;
		}
		$content = '<div class="bg">';
		$content .= '<h3>'.$this->Html->link($data['name'], array('controller' => 'forums', 'action' => $action, $data['id'])).'</h3>';
		$content .= '<p>'.$data['created'].'</p>';
		$content .= '<p>NB de '.$str.': '.$data['id'].'</p>';
		$content .= '</div>';
		return($content);
	}
}
