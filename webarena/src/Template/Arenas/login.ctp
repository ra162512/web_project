<!-- src/Template/Users/login.ctp -->

<title>LOGIN</title>

<div class="players form">
<?= $this->Flash->render() ?>
<?php echo $this->Form->create('BriceCake', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => array(
			'class' => 'col col-md-3 control-label'
		),
		'wrapInput' => 'col col-md-9',
		'class' => 'form-control'
	),
	'class' => 'well form-horizontal'
)); ?>
    <fieldset>
      
        <legend><?= __("Merci de rentrer votre email et mot de passe") ?></legend>
        
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Se Connecter')); 

 
?>
    