
<title>Login</title>

<div class="players form">
<?= $this->Flash->render() ?>
<?php echo $this->Form->create(); ?>
    <fieldset>
      
        <legend><?= __("Please, put your email and password") ?></legend>
      
        <?= $this->Form->control('email', [ 'class' => 'form-control']) ?>
          
       <br/>
       
        <?= $this->Form->control('password',  [ 'class' => 'form-control' ]) ?>
        <small id="emailHelp" class="form-text text-muted">Never Give your password to any other player</small>
    </fieldset>
    <br/>
<?= $this->Form->button('Login', [ 'class' => 'btn btn-primary'])?>
<?= $this->Form->end() ?>
    