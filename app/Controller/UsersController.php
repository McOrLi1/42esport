<?php
class UsersController extends AppController {

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash("L'utilisateur a ete ajoute", 'notif');
				$this->redirect(array('controller' => 'users', 'action' => 'list'));
			} else {
				$this->Session->setFlash("L'utilisateur n'a pu etre ajoute", 'notif', array('color' => 'red'));
			};
		}
	}

	public function admin_edit($id = null) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->User->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash("L'utilisateur a été modifié", 'notif');
				$this->redirect(array('controller' => 'users', 'action' => 'list'));
			}
			else {
				$this->Session->setFlash("L'utilisateur n'a pu etre modifié", 'notif', array('color' => 'red'));
			}
		}
		$this->request->data['User']= current($found);
		$this->set('user', current($found));
	}

	public function admin_list() {
		$this->set('users', $this->User->find('all'));
	}

	public function admin_delete($id = null) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->User->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash("L'utilisateur a été supprimé", 'notif');
			$this->redirect(array('controller' => 'users', 'action' => 'list'));
		} else {
			$this->Session->setFlash("L'utilisateur n'a pu etre supprimé", 'notif', array('color' => 'red'));
			$this->redirect(array('controller' => 'users', 'action' => 'list'));
		}
	}

	public function login() {

		if (!empty($this->request->data))
		{
			if ($this->Auth->login()) {
				$this->Session->setFlash("Vous etes loggé putain !!", 'notif');
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
			} else {
				$this->Session->setFlash("Trop pas", 'notif', array('color' => 'orange'));
			}
		}
	}

	public function logout() {
		$this->Auth->logout();
		$this->Session->setFlash("Au revoir", 'notif', array('color' => 'red'));
		$this->redirect(array('controller' => 'pages', 'action' => 'index'));
	}

	public function profile() {
		$id = $this->Auth->user('id');
		$this->set('user', $this->User->findById($id));
		$this->layout = 'profile';
	}

	public function beforeRender() {
		parent::beforeRender();
		$this->set('sidebar_admin', 'users');
	}
}
