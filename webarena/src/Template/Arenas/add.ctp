
<div class="players form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Pour vous inscrire remplissez le formulaire') ?></legend>
        <?= $this->Form->control('username') ?>
        </br>
        <?= $this->Form->control('password') ?>
        </br>
        <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?>
    </fieldset>
<?= $this->Form->button(__('Ajouter')); ?>
<?= $this->Form->end() ?>
</div>

