
<div class="players form">
<?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Pour vous inscrire remplissez le formulaire') ?></legend>
        <?= $this->Form->control('email') ?>
        </br>
        <?= $this->Form->control('password') ?>
        </br>
      
    </fieldset>
<?= $this->Form->button(__('Ajouter')); ?>
<?= $this->Form->end() ?>
</div>

