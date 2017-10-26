<h4>Récupération de votre mot de passe</h4>

    <?php echo $this->Form->create('afficherpassword');
    echo $this->Form->input('email', array("placeholder" => "Username", ['type' => 'email']));?>

    <?= $this->Form->submit('Récuperer mot de passe', ['type' => 'submit']);?>
    <?= $this->Form->end();?>

    <h2> Informations </h2>
   
    <?php echo "votre mot de passe est: "; echo '<b>'.$password;?>
