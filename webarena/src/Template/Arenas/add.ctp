<title>Registration</title>
<div class="players form">

<?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Please, complete the form to register you') ?></legend>

<br/>
<br/>
    
      <?= $this->Form->control('email', [ 'class' => 'form-control']) ?>
        </br>
        <?= $this->Form->control('password',  [ 'class' => 'form-control' ]) ?>
        </br>      
    </fieldset>

    
    <br/>

 
<?= $this->Form->button('Add', [ 'class' => 'btn btn-primary btn-block'])?>
<?= $this->Form->end() ?> 
</div>
