<?php
class UsersController extends AppController {

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash("L'user a ete ajoute", 'notif');
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
			} else {
				$this->set('notifclr', 'Red');
				$this->Session->setFlash("L'user n'a pu etre ajoute", 'notif');
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
			echo debug($this->request->data);
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash("L'user a été modifié", 'notif');
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
			}
			else {
				$this->set('notifclr', 'Red');
				$this->Session->setFlash("L'user n'a pu etre modifié", 'notif');
			}
		}
		$this->request->data['User']= current($found);
		$this->set('user', current($found));
	}

}
