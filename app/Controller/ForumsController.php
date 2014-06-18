<?php
class ForumsController extends AppController {

	public $uses = array('Forum', 'Category', 'Thread', 'Post');

	public function forums_list() {
		$forums = $this->Forum->find('all');
		foreach ($forums as $k => $d) {
			$d = current($d);
			$categories = $this->Category->find('all', array('conditions' => array('id_forum' => $d['id'])));
			$forums[$k]['Forum']['nb'] = count($categories);
		}
		$this->set('forums', $forums);
	}

	public function categories_list($id_forum = null) {
		if ($id_forum == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Category->find('all', array('conditions' => array('id_forum' => $id_forum)));
		foreach ($found as $k => $d) {
			$d = current($d);
			$threads = $this->Thread->find('all', array('conditions' => array('id_category' => $d['id'])));
			$found[$k]['Category']['nb'] = count($threads);
		}
		$this->set('categories', $found);
		$this->set('forum', $this->_forum_data($id_forum));
	}

	public function threads_list($id_category = null) {
		if ($id_category == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Thread->find('all', array('conditions' => array('id_category' => $id_category)));
		foreach ($found as $k => $d) {
			$d = current($d);
			$posts = $this->Post->find('all', array('conditions' => array('id_thread' => $d['id'])));
			$found[$k]['Thread']['nb'] = count($posts);
		}
		$this->set('threads', $found);
		$this->set('category', ($category_data = $this->_category_data($id_category)));
		$this->set('forum', $this->_forum_data($category_data['id_forum']));
	}

	public function posts_list($id_posts = null) {
		if ($id_posts == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Thread->find('all', array('conditions' => array('id_category' => $id_posts)));
		$this->set('threads', $found);
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

	public function admin_forums_add() {
		if ($this->request->is('post')) {
			$this->Forum->create();
			if ($this->Forum->save($this->data)) {
				$this->Session->setFlash("Le forum a ete ajouté", 'notif');
				$this->redirect(array('action' => 'forums_list'));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("Le forum n'a pu etre ajouté", 'notif');
			};
		}
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
				$this->redirect(array('action' => 'forums_list'));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("Le forum n'a pu etre modifié", 'notif');
			}
		}
		$this->request->data['Forum'] = current($found);
		$this->set('forum', current($found));
	}

	public function admin_forums_delete($id = null) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Forum->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		if ($this->Forum->delete($id)) {
			$this->Session->setFlash("Le forum a bien été supprimé", 'notif');
			$this->redirect(array('action' => 'forums_list'));
		} else {
			$this->set('notif_clr', 'Red');
			$this->Session->setFlash("Le forum n'a pu etre supprimé", 'notif');
			$this->redirect(array('action' => 'forums_list'));
		}
	}

	public function admin_categories_list($id_forum = null) {
		$found = $this->Category->find('all', array('conditions' => array('id_forum' => $id_forum)));
		foreach ($found as $k => $d) {
			$d = current($d);
			$threads = $this->Thread->find('all', array('conditions' => array('id_category' => $d['id'])));
			$found[$k]['Category']['nb_threads'] = count($threads);
		}
		$this->set('categories', $found);
		$this->set('forum', $this->_forum_data($id_forum));
	}

	public function admin_categories_add($id_forum) {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash("La categorie a ete ajoutée", 'notif');
				$this->redirect(array('action' => 'categories_list', $id_forum));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("La categorie n'a pu etre ajoutée", 'notif');
			};
		}
		$this->set('forum', $this->_forum_data($id_forum));
	}

	public function admin_categories_edit($id = null) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Category->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash("La categorie a été modifié", 'notif');
				$this->redirect(array('action' => 'categories_list', $found['Category']['id_forum']));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("La categorie n'a pu etre modifié", 'notif');
			}
		}
		$this->request->data['Category'] = current($found);
		$this->set('category', current($found));
		$this->set('forum', $this->_forum_data($found['Category']['id_forum']));
	}

	public function admin_categories_delete($id = null, $id_forum) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Category->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		if ($this->Category->delete($id)) {
			$this->Session->setFlash("La categorie a bien été supprimée", 'notif');
			$this->redirect(array('action' => 'categories_list', $id_forum));
		} else {
			$this->set('notif_clr', 'Red');
			$this->Session->setFlash("La categorie n'a pu etre supprimé", 'notif');
			$this->redirect(array('action' => 'categories_list', $id_forum));
		}
	}

	public function admin_threads_list($id_category = null) {
		$found = $this->Thread->find('all', array('conditions' => array('id_category' => $id_category)));
		foreach ($found as $k => $d) {
			$d = current($d);
			$posts = $this->Post->find('all', array('conditions' => array('id_thread' => $d['id'])));
			$found[$k]['Thread']['nb_posts'] = count($posts);
		}
		$this->set('threads', $found);
		$this->set('category', ($category_data = $this->_category_data($id_category)));
		$this->set('forum', $this->_forum_data($category_data['id_forum']));
	}

	public function admin_threads_add($id_category) {
		if ($this->request->is('post')) {
			$this->Thread->create();
			if ($this->Thread->save($this->data)) {
				$this->Session->setFlash("Le sujet a ete ajoutée", 'notif');
				$this->redirect(array('action' => 'threads_list', $id_category));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("Le sujet n'a pu etre ajoutée", 'notif');
			};
		}
		$this->set('category', ($category_data = $this->_category_data($id_category)));
		$this->set('forum', $this->_forum_data($category_data['id_forum']));
	}

	public function admin_threads_edit($id = null) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Thread->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Thread->create();
			if ($this->Thread->save($this->request->data)) {
				$this->Session->setFlash("Le sujet a été modifié", 'notif');
				$this->redirect(array('action' => 'threads_list', $found['Thread']['id_category']));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("Le sujet n'a pu etre modifié", 'notif');
			}
		}
		$this->request->data['Thread'] = current($found);
		$this->set('thread', current($found));
		$this->set('category', ($category_data = $this->_category_data($found['Thread']['id_category'])));
		$this->set('forum', $this->_forum_data($category_data['id_forum']));
	}

	public function admin_threads_delete($id = null, $id_category) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Thread->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		if ($this->Thread->delete($id)) {
			$this->Session->setFlash("Le sujet a bien été supprimée", 'notif');
			$this->redirect(array('action' => 'threads_list', $id_category));
		} else {
			$this->set('notif_clr', 'Red');
			$this->Session->setFlash("Le sujet n'a pu etre supprimé", 'notif');
			$this->redirect(array('action' => 'threads_list', $id_category));
		}
	}

	private function _forum_data($id_forum) {
		$forum_data = $this->Forum->find('all', array('conditions' => array('id' => $id_forum), 'fields' => array('name')));
		$forum_data = current($forum_data)['Forum'];
		$data = array_merge(array('id' => $id_forum), $forum_data);
		return ($data);
	}

	private function _category_data($id_category) {
		$category_data = $this->Category->find('all', array('conditions' => array('id' => $id_category), 'fields' => array('name', 'id_forum')));
		$category_data = current($category_data)['Category'];
		$data =  array_merge(array('id' => $id_category), $category_data);
		return ($data);
	}

	public function beforeRender() {
		parent::beforeRender();
		$this->set('sidebar', 'forums');
		if ($this->request->prefix == null) {
			$this->layout = 'forum';
		}
	}

}
