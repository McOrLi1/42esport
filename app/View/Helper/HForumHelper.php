<?php
class HForumHelper extends AppHelper {
	
	public $helpers = array('Html');

	public function content($level, $data) {
		if ($level === 'posts') {
			$content = '<div class="bg">';
			$content .= '<p style="color:#999999" class"my-txt-grey">'.$data['author'].' dit:</p>';
			$content .= '<p>'.$data['content'].'</p>';
			$content .= '<p style="color:#999999" class"my-txt-grey">';
			$content .= 'Posté le '.$data['created'].' Modifié le '.$data['modified'];
			$content .= ' '.$this->Html->link('Editer', array('action' => 'post_edit', $data['id']));
			$content .= ' '.$this->Html->link('Supprimer', array('action' => 'post_delete', $data['id']), null, 'Certain de vouloir supprimer ce post?');
			$content .= '</p>';
			$content .= '</div>';
			return($content);
		}
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
				$class = ' class="bg-lblue"';
				$text .= '<h3>Liste des forums</h3>';
				break ;
			case 'categories':
				$class = ' class="bg-blue"';
				$text .= '<h3>Forum Tournoi '.$data['forum']['name'].'</h3>';
				break ;
			case 'threads':
				$class = ' class="bg-purple"';
				$text .= '<h3>Categorie '.$data['category']['name'].'</h3>';
				$text .= $this->Html->link('++ Ajouter un sujet', array('action' => 'thread_add', $data['category']['id']), array('style' => 'color:white;'));
				break ;
			case 'thread':
				$class = ' class="bg-purple"';
				$text .= '<h3>Categorie '.$data['category']['name'].'</h3>';
				break ;
			case 'posts':
				$class = ' class="bg-green"';
				$text .= '<h3>Categorie '.$data['category']['name'].'</h3>';
				$text .= '<h4>Sujet '.$data['thread']['name'].'</h4>';
				break ;
			case 'post':
				$class = ' class="bg-green"';
				$text .= '<h3>Categorie '.$data['category']['name'].'</h3>';
				$text .= '<h4>Sujet '.$data['thread']['name'].'</h4>';
				$text .= 'Editer un message<br>';
				break ;
			default :
				$class = ' class="bg"';
				break ;
		}
		$content .= $class.'>'.$text.'</div>';
		return ($content);
	}

	public function sidebar_header($level, $data) {
		$content = '<li><h2 class="radius">';
		switch ($level) {
			case 'forums':
				$content .= $this->Html->link('Les forums', array('action' => 'forums_list'));
				break ;
			case 'categories':
				$content .= $this->Html->link('Forum', array('action' => 'categories_list', $data['forum']['id']));
				break ;
			case 'threads':
				$content .= $this->Html->link('Forum', array('action' => 'categories_list', $data['forum']['id']));
				break ;
			case 'posts':
				$content .= $this->Html->link($data['category']['name'], array('action' => 'threads_list', $data['category']['id']));
				break ;
			case 'post':
				$content .= $this->Html->link('Retour', array('action' => 'posts_list', $data['thread']['id']));
				break ;
		}
		$content .= '</h2></li>';
		return ($content);
	}

	public function sidebar_title($level, $data) {
		if ($level == 'post') {
			return ('');
		}
		$content = '<li><a>';
		switch ($level) {
			case 'forums';
				$content .= $this->Html->link('Derniers posts:', array('action' => 'forums_list'));
				break ;
			case 'categories';
				$content .= $this->Html->link('Derniers posts:', array('action' => 'categories_list', $data['forum']['id']));
				break ;
			case 'threads';
				$content .= $this->Html->link('Autres categories', array('action' => 'categories_list', $data['forum']['id']));
				break ;
			case 'posts';
				$content .= $this->Html->link('Autres sujets', array('action' => 'threads_list', $data['category']['id']));
				break ;
		}
		$content .= '</a></li>';
		return ($content);
	}

	public function sidebar_choice($level, $data, $id_active) {
		$content = '<li';
		$content .= ($data['id'] === $id_active ? ' class="active">' : '>');
		$textclass = ($data['id'] === $id_active ? 'active' : '');
		switch ($level) {
			case 'threads';
				$controller = 'forums';
				$action = 'threads_list';
				break ;
			case 'posts';
				$controller = 'forums';
				$action = 'posts_list';
				break ;
		}
		$content .= $this->Html->link($data['name'], array('controller' => $controller, 'action' => $action, $data['id']), array('class' => $textclass));
		$content .= '</li>';
		return ($content);
	}
}
