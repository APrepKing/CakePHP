<h1>Modifier un élève</h1>

<table>
	<thead>
	<?php echo $this->Html->tableHeaders(array('nom','prenom','date de naissance','date d\'ajout')); ?>

	</thead>
	<?php echo $this->Html->tableCells(array(
			array(
				$eleve['Student']['name'],
				$eleve['Student']['first_name'],
				$this->Time->format($eleve['Student']['birth_date'], '%d-%m-%Y'),
				$this->Time->format($eleve['Student']['created'], '%d-%m-%Y  %H:%M:%S')
			)
		));
	?>
</table>

<?php echo $this->Form->create('Student'); ?>
	<?php echo  $this->Form->input('name',array('label' => 'Nom de l\'élève ', 'placeholder' => $eleve['Student']['name'])); ?>
	<?php echo  $this->Form->input('first_name',array('label' => 'Prénom de l\'élève ', 'placeholder' => $eleve['Student']['first_name'])); ?>
	<?php echo  $this->Form->input('birth_date',array('label' => 'Date de naissance de l\'élève ', 'dateFormat' => 'DMY','empty' => array(
            'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 3)); ?>
    <?php echo $this->Form->input('id', array('value' => $eleve['Student']['id'])); ?>
<?php echo $this->Form->end('Modifier'); ?>