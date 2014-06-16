<?php
class User extends AppModel {

	public $validate = array(
		'username' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Len' => array(
				'rule' => array('between', 3, 20),
				'message' => 'Longueur entre 3 et 20'
				),
			'Shape' => array(
				'rule' => '/^[a-z0-9\-_ ]+$/i',
				'message' => 'Pas trop de charateres zarbs svp'
				),
			'Unique' => array(
				'rule' => 'isUnique',
				'message' => 'Nom deja pris'
				)
			),
		'password' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Len' => array(
				'rule' => array('between', 6, 20),
				'message' => 'Longueur entre 6 et 20'
				),
			'Shape' => array(
				'rule' => '/^[a-z0-9]*[0-9]+[a-z0-9]*$/i',
				'message' => 'Au moins un chiffre et des (a-Z 0-9) svp'
				)
			),
		'name' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Len' => array(
				'rule' => array('between', 3, 25),
				'message' => 'Longueur entre 3 et 25'
				),
			'Shape' => array(
				'rule' => '/^[a-z\-\' ]+$/i',
				'message' => 'Pas trop de charateres zarbs svp'
				)
			),
		'lastname' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Len' => array(
				'rule' => array('between', 3, 40),
				'message' => 'Longueur entre 3 et 40'
				),
			'Shape' => array(
				'rule' => '/^[a-z\-\']+$/i',
				'message' => 'Pas trop de charateres zarbs svp'
				)
			),
		'email' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Mail' => array(
				'rule' => array('email', true),
				'message' => 'Entrez un mail valide svp'
				)
			),
		'type' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Admitted' => array(
				'rule' => 'typeAdmitted',
				'message' => 'Admin / User'
				)
			),
		'birthdate' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Date' => array(
				'rule' => array('date', 'ymd'),
				'message' => 'Annee-Mois-Jour'
				),
			'Date' => array(
				'rule' => 'birthdateAge',
				'message' => "Faut au moins du 15 ans d'age"
				)
			),
		'status' => array(
			'NotNull' => array(
				'rule' => 'notEmpty',
				'message' => 'Ce champ ne peut etre vide'
				),
			'Admitted' => array(
				'rule' => 'statusAdmitted',
				'message' => 'Normal / Banni / Suspendu / En attente'
				)
			)
		);

	public function typeAdmitted($data, $or = true) {
		$str = $data['type'];
		if ($str === 'Admin' || $str === 'User') {
			return true;
		}
		return false;
	}

	public function statusAdmitted($data, $or = true) {
		$str = $data['status'];
		if ($str === 'Normal' || $str === 'Banni' || $str === 'Suspendu' || $str === 'En attente') {
			return true;
		}
		return false;
	}

	public function birthdateAge($data, $or = true) {
		$curdate = time();
		$userdate = strtotime($data['birthdate']);
		if (date('Y', $curdate - $userdate) - 1970 >= 15) {
			return true;
		}
		return false;
	}

}
