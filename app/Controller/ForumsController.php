<?php
class ForumsController extends AppController {

	public $uses = array('Forum', 'Category', 'Thread', 'Post');

	public function forum_list() {
		$forums = $this->Forum->find('all');
		$this->set('forums', $forums);
	}

	public function category_list($id_forum = null) {
		if ($id_forum == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Category->find('all', array('conditions' => array('id_forum' => $id_forum)));
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$this->set('categories', $found);
	}

	public function thread_list($id_category = null) {
		if ($id_category == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Thread->find('all', array('conditions' => array('id_category' => $id_category)));
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$this->set('threads', $found);
	}

}
