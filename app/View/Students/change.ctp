<h1>Modifier/Supprimer un élève</h1>

<table>
	<thead>
	<?php echo $this->Html->tableHeaders(array('nom','prenom','date de naissance','date d\'ajout','','')); ?>

	</thead>

	<?php
	foreach ($eleves as $k => $student) {

		echo $this->Html->tableCells(array(
			array(
				$student['Student']['name'],
				$student['Student']['first_name'],
				$this->Time->format($student['Student']['birth_date'], '%d-%m-%Y'),
				$this->Time->format($student['Student']['created'], '%d-%m-%Y  %H:%M:%S'),
				$this->Html->link('Modifier',array('action' => 'update','id' => $student['Student']['id'])),
				$this->Html->link('Supprimer',array('action' => 'change','id' => $student['Student']['id']))
			)
		));
	} 
	?>

</table>