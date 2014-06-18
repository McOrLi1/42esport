<?php
class Forum extends AppModel {

	public $validate = array(
		'name' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Shape' => array(
				'rule' => '/^[a-z0-9\-_\' ]+$/i',
				'message' => 'Pas trop de charateres zarbs svp'
				)
			),
		'created' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				)
			)
		);

	public function beforeSave($options = array()) {
		parent::beforeSave($options);
		if (isset($this->data['Forum']['timestamp'])) {
			$this->data['Forum']['created'] = date("Y-m-d H-i-s", $this->data['Forum']['timestamp']);
		}
	}
}
