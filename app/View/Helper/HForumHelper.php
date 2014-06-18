<?php
class HForumHelper extends AppHelper {
	
	public $helpers = array('Html');

	public function content($level, $data) {
		switch ($level) {
			case 'forums': $action = 'categories_list'; $str = 'Categories'; break;
			case 'categories': $action = 'threads_list'; $str = 'Sujets'; break;
			case 'threads': $action = 'posts_list'; $str = 'Posts'; break;
		}
		$content = '<div class="bg">';
		$content .= '<h3>'.$this->Html->link($data['name'], array('controller' => 'forums', 'action' => $action, $data['id'])).'</h3>';
		$content .= '<p>Crée le : '.$data['created'].'</p>';
		$content .= '<p>('.$str.': '.$data['nb'].')</p>';
		$content .= '</div>';
		return($content);
	}

	public function header($level, $data) {
		$content = '<div';
		$text = '';
		switch ($level) {
			case 'forums':
				$class = ' class="bg-green"';
				$text .= '<h3>Liste des forums</h3>';
				break ;
			case 'categories':
				$class = ' class="bg-blue"';
				$text .= '<h3>Forum '.$data['forum']['name'].'</h3>';
				break ;
			case 'threads':
				$class = ' class="bg-purple"';
				$text .= '<h3>Forum '.$data['forum']['name'].'</h3>';
				$text .= '<h4>Categorie '.$data['category']['name'].'</h4>';
				$text .= $this->Html->link('<< Revenir aux categories', array('action' => 'categories_list', $data['forum']['id']));
				break ;
				default:
				$class = ' class="bg"';
		}
		$content .= $class.'>'.$text.'</div>';
		return ($content);
	}
}
