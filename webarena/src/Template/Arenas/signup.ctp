<h2> S'enregistrer </h2>

<?php echo $this->Form->create("PlayersTable"); ?>

        <?php echo $this->Form->input('username',array('label'=>"Login : ")); ?>
        <?php echo $this->Form->input('mail',array('label'=>"Email : ")); ?>
        <?php echo $this->Form->input('password',array('label'=>"mot de passe : ")); ?>

        <?php echo $this->Form->submit('soumettre'); ?>
<?php echo $this->Form->end(); ?>
