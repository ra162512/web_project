<title>Newpassword</title>
<h4>Password Recovery</h4>

    <?php echo $this->Form->create('afficherpassword');
    echo $this->Form->input('email',[ 'class' => 'form-control']);?>

    <?= $this->Form->submit('Recover your password', [ 'class' => 'btn btn-primary ']);?>
    <?= $this->Form->end();?>

    <h2> Information </h2>
   
    <?php echo "Your password is: "; echo '<b>'.$password;?>