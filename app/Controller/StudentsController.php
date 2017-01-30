<?php

class StudentsController extends AppController{

	public function display(){

	}

	public function add(){

		if($this->request->is('post') || $this->request->is('put')){
			$this->Student->create($this->request->data, true);
			if($this->Student->validates()){
				$eleve = $this->Student->find('all', array(
					'conditions' => array(
						'Student.name' => $this->request->data['Student']['name'],
						'Student.first_name' => $this->request->data['Student']['first_name']
					)
				));
				if(empty($eleve)){
					$this->Student->save(null, true, array('name','first_name','birth_date'));
					$this->set('response','Nouvel élève bien ajouté dans la liste ');
				} else {
					$this->set('response','Elève déjà présent dans la liste ');
				}

				$this->render('add-response');
			}
		}
	}

	public function change($id = null){

		if(!empty($id)){
			$this->Student->delete($id);
		}

		$eleves = $this->Student->find('all');

		if(empty($eleves)){
			$this->set('response','Il n\'existe aucun élève dans la base de données, merci de commencer par ajouter un élève ');
			$this->render('add-response');
		}
		
		$this->set('eleves', $eleves);

	}

	public function update($id = null){

		$validator = $this->Student->validator();
		$validator->remove('name');
		$validator->remove('first_name');

		if($this->request->is('post') || $this->request->is('put')){

				$postData = $this->request->data;
				$postData["Student"]["birth_date"] = array_filter($postData["Student"]["birth_date"]);
				$postData = array_map('array_filter',$postData);
				
				if($this->Student->save($postData, true, array('name','first_name','birth_date')))
					unset($this->request->data);
		}

		$eleve = $this->Student->findById($id);
		$this->set('eleve', $eleve);

	}

}