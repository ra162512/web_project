<h1>Créer une nouvelle Guilde</h1>
<?php

echo $this->Form->create();
echo $this->form->input('id' , array('type'=>'hidden', 'value'=> $guild_id ));
echo $this->Form->input('name',  [ 'class' => 'form-control' ]);
echo '<br/>';
echo $this->Form->button("Créer une Guilde", [ 'class' => 'btn btn-primary ']);
echo $this->Form->end();
echo '<br/>';?>


<?php echo $messG;?>
