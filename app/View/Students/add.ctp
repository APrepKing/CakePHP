<h1>Ajouter un élève</h1>

<?php
echo $this->Form->create('Student');
	echo  $this->Form->input('name',array('label' => 'Nom de l\'élève '));
	echo  $this->Form->input('first_name',array('label' => 'Prénom de l\'élève '));
	echo  $this->Form->input('birth_date',array('label' => 'Date de naissance de l\'élève ','dateFormat' => 'DMY','empty' => array(
            'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'), 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 3));
echo $this->Form->end('Ajouter'); 
?>
