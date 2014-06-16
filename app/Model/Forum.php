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
}
