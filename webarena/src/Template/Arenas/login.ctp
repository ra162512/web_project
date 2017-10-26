<!-- src/Template/Users/login.ctp -->

<title>LOGIN</title>

<div class="players form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
      
        <legend><?= __("Merci de rentrer votre email et mot de passe") ?></legend>
        
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Se Connecter')); 

 
?>
    
<?= $this->Form->end() ?>
</div>
