<?php

class NotesController extends AppController{

	public function add(){

		if($this->request->is('post') || $this->request->is('put')){

			$this->Note->create($this->request->data, true);
			if($this->Note->save(null, true, array('note','student_id','subject_id')))
				unset($this->request->data);
		}

		$listStudents = $this->Note->Student->find('all', array(
			'fields' => array('id','name','first_name'),
			'order' =>array('Student.name ASC')
		));

		if(empty($listStudents)){
			$this->render('add-error');
		}

		$listSubjects = $this->Note->Subject->find('list', array(
			'order' =>array('Subject.name ASC')
		));

		$listNotes = $this->Note->find('all', array(
			'fields' => array('Student.name', 'Student.first_name', 'note', 'Subject.name'),
			'order' =>array('Student.name ASC')
		));

		$this->set(array('listSubjects' => $listSubjects, 'listStudents' => $listStudents, 'listNotes' => $listNotes));
	}
}