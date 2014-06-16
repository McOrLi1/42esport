<?php
class ForumsController extends AppController {

	public $uses = array('Forum', 'Category', 'Thread', 'Post');

	public function forums_list() {
		$forums = $this->Forum->find('all');
		$this->set('forums', $forums);
	}

	public function admin_forums_list() {
		$found = $this->Forum->find('all');
		foreach ($found as $k => $d) {
			$d = current($d);
			$categories = $this->Category->find('all', array('conditions' => array('id_forum' => $d['id'])));
			$found[$k]['Forum']['nb_categories'] = count($categories);
		}
		$this->set('forums', $found);
	}

	public function admin_forums_edit($id = null) {

		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}

		$found = $this->Forum->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Forum->create();
			if ($this->Forum->save($this->request->data)) {
				$this->Session->setFlash("Le forum a été modifié", 'notif');
				$this->redirect(array('controller' => 'forums', 'action' => 'forums_list'));
			}
			else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("Le forum n'a pu etre modifié", 'notif');
			}
		}
		$this->request->data['Forum']= current($found);
		$this->set('forum', current($found));
		$this->set('sidebar', 'forum');
	}

	public function categories_list($id_forum = null) {
		if ($id_forum == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Category->find('all', array('conditions' => array('id_forum' => $id_forum)));
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$this->set('categories', $found);
	}

	public function threads_list($id_category = null) {
		if ($id_category == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Thread->find('all', array('conditions' => array('id_category' => $id_category)));
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$this->set('threads', $found);
	}

	public function posts_list($id_posts = null) {
		if ($id_posts == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Thread->find('all', array('conditions' => array('id_category' => $id_posts)));
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$this->set('threads', $found);
	}

	public function beforeRender() {
		$this->set('sidebar', 'forums');
		if ($this->request->prefix == null) {
			$this->layout = 'forum';
		}
	}

}
