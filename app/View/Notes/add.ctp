<h1>Attribuer une note à un élève</h1>


<?php

foreach ($listStudents as $k => $student) {
	$listNameStudents[$student['Student']['id']] = $student['Student']['name'].' '.$student['Student']['first_name'];
}

echo $this->Form->create('Note');
	echo  $this->Form->input('student_id',array('label' => 'Elève ','empty' => 'Sélectionner l\'élève...', 'options' => $listNameStudents));
	echo  $this->Form->input('subject_id',array('label' => 'Matière ', 'empty' => 'Sélectionner la matière...',  'options' => $listSubjects));
	echo  $this->Form->input('note',array('label' => 'Note ', 'type' => 'text', 'placeholder' => 'Ajouter une note...'));
echo $this->Form->end('Attribuer'); 

?>

<table>
	<thead>
	<?php echo $this->Html->tableHeaders(array('nom','prenom','note','matière')); ?>

	</thead>

	<?php
	foreach ($listNotes as $k => $note) {

		echo $this->Html->tableCells(array(
			array(
				$note['Student']['name'],
				$note['Student']['first_name'],
				$note['Note']['note'],
				$note['Subject']['name']
			)
		));
	} 
	?>

</table>