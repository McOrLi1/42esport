<?php
class TournamentsController extends AppController {

	public $uses = array('Tournament');



	public function admin_list() {
		$this->set('tournaments', $this->Tournament->find('all'));
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tournament->create();
			if ($this->Tournament->save($this->data)) {
				$this->Session->setFlash("Le tournois a ete ajoute", 'notif');
				$this->redirect(array('controller' => 'tournaments', 'action' => 'add'));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("Le tournois n'a pu etre ajoute", 'notif');
			};
		}
	}

	public function admin_edit($id = null) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Tournament->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Tournament->create();
			if ($this->Tournament->save($this->request->data)) {
				$this->Session->setFlash("Le tournoi a été modifié", 'notif');
				$this->redirect(array('controller' => 'tournaments', 'action' => 'list'));
			}
			else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("Le tournois n'a pas pu etre modifié", 'notif');
			}
		}
		$this->request->data['Tournament']= current($found);
		$this->set('tournament', current($found));
	}

	public function beforeRender() {
		$this->set('sidebar', 'tournaments');
		if ($this->request->prefix == null) {
			$this->layout = 'tournament';
		}
	}

	public function admin_delete($id = null) {
		if ($id == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		$found = $this->Tournament->findById($id);
		if ($found == null) {
			throw new NotFoundException("La page demandée n'existe pas");
		}
		if ($this->Tournament->delete($id)) {
			$this->Session->setFlash("Le tournoi a été supprimé", 'notif');
			$this->redirect(array('controller' => 'tournaments', 'action' => 'list'));
		} else {
			$this->set('notif_clr', 'Red');
			$this->Session->setFlash("Le tournoi n'a pas pu etre supprimé", 'notif');
			$this->redirect(array('controller' => 'tournaments', 'action' => 'list'));
		}

	}

}
