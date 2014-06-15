<?php
class ForumsController extends AppController {

	public $uses = array('Forum', 'Category', 'Thread', 'Post');

	public function forum_list() {
		$forums = $this->Forum->find('all');
		$this->set('forums', $forums);
	}

	public function forum_add() {
	}

	public function forum_edit($id = null) {
	}

}
