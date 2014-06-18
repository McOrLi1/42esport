<?php
class TournamentsController extends AppController {

	public $uses = array('Equipe', 'Inscription', 'News', 'Video');

	public function index() {
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tournament->create();
			if ($this->Tournament->save($this->data)) {
				$this->Session->setFlash("L'user a ete ajoute", 'notif');
				$this->redirect(array('controller' => 'users', 'action' => 'list'));
			} else {
				$this->set('notif_clr', 'Red');
				$this->Session->setFlash("L'user n'a pu etre ajoute", 'notif');
			};
		}
	}

	public function beforeRender() {
		$this->set('sidebar', 'tournaments');
		if ($this->request->prefix == null) {
			$this->layout = 'tournament';
		}
	}

}
