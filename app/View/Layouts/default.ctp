
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>AP CakePHP Test</title>
	<?php

		echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
	<header>
        <div id="headerLeft">
            <h1>Alexandre P.</h1>
            <h2>CakePHP Test</h2>
        </div>
        <div id="headerRight">
            <nav>
                <ul>
                    <li><a href="<?php echo $this->Html->url('/eleve/ajout',array('controller' => 'Students','action' => 'add')); ?>">Ajouter un Elève</a></li>
                    <li><a href="<?php echo $this->Html->url('/eleve/modification-suppression',array('controller' => 'Students','action' => 'change')); ?>">Modifier/Supprimer un Elève</a></li>
                    <li><a href="<?php echo $this->Html->url('/eleve/attribution-note',array('controller' => 'Notes','action' => 'add')); ?>">Attribuer une note</a></li>
                </ul>
            </nav>
        </div>
    </header>
	<div id="container">
			<?php echo $this->fetch('content'); ?>
	</div>
	<footer>
        <ul>
            <li id='tel'> 06 68 54 83 43</li>
            <li id='mail'> alexandre.prepoint@gmail.com</li>
        </ul>
    </footer>
    <?php echo $this->fetch('css'); ?>
</body>
</html>
