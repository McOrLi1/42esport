<?php

class Category extends AppModel {

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
		if (isset($this->data['Category']['timestamp'])) {
			$this->data['Category']['created'] = date("Y-m-d H-i-s", $this->data['Category']['timestamp']);
		}
	}
}
