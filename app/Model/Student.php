<?php
class Student extends AppModel{

	public $hasMany = array(
		'Note' => array(
			'dependent' => true
		));

	public $validate = array(
		'name' => array(
			'nameStudentRequired' => array(
				'rule' => 'notBlank',
				'required' => true,
				'message' => 'Entrez un nom d\'élève'
			)
		),
		'first_name' => array(
         	'firstNameStudentRequired' => array(
				'rule' => 'notBlank',
				'required' => true,
				'message' => 'Entrez un prénom d\'élève'
			)
		)

	);
	
}