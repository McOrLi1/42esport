<?php
class UsersController extends AppController {

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash("L'user a ete ajoute");
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
			} else {
				$this->Session->setFlash("L'user n'a pu etre ajoute");
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
		$this->request->data['User']= current($found);
		$this->set('user', current($found));
		if ($this->request->is('post')) {
			echo 'ok';
		}
	}

}
