<?php $this->assign('title', 'Connexion');?>

<h2> Connexion </h2>

<p> Merci d'insérer vos identifiants dans les champs ci-dessous pour vous connecter : </p>

<?php echo $this->Form->create('Connection'); ?>

<div>
        <?php echo $this->Form->create(null);
        echo $this->Form->input('userName', array("placeholder" => "Username", ['type' => 'email']));?>
        <?php echo $this->Form->password('password', array("placeholder" => "Password"));?>
        <?= $this->Form->submit('Connexion', ['type' => 'submit']);?>
        <?= $this->Form->end();?>

        <h2> Informations </h2>
        <?php echo $message;?>
        <?php echo $acces; ?>
</div>

<h2>Inscription</h2>

<a href="newlogin"><input type="button" name="créer un compte "value="Créer un compte "/></a>

<h2>Changement de mot de passe</span></h2>
<a href="changepassword"><input type="button" name="changer de mot de passe"value="changer de mot de passe"/></a>

<?php echo $this->Html->link("changer de mot de passe", array('action' => 'changepassword'));?>
