<?php
class note extends AppModel{
	
	public $belongsTo = array(
		'Student',
		'Subject'
	);

	public $validate = array(
		'student_id' => array(
			'studentRequired' => array(
				'rule' => 'notBlank',
				'required' => true,
				'message' => 'Sélectionnez un élève'
			)
		),
		'subject_id' => array(
			'subjectRequired' => array(
				'rule' => 'notBlank',
				'required' => true,
				'message' => 'Sélectionnez une matière'
			)
		),
		'note' => array(
			'noteRequired' => array(
				'rule' => 'notBlank',
				'required' => true,
				'message' => 'Ajoutez une note'
			),
			'noteNumeric' => array(
				'rule' => 'numeric',
				'message' => 'Ajoutez une note sous forme numérique'
			),
			'noteBetween' => array(
				'rule' => array('range', -0.1, 20.1),
				'message' => 'Ajoutez une note entre 0 et 20'
			),
			'notePrecision' => array(
				'rule' => '/^[0-9]{1,2}+(\.[0-9])?$/',
				'message' => 'Ajoutez une note avec une précision de 0.1'
			)	
		)

	);


}