<h1>Create a new Guild</h1>
<?php

echo $this->Form->create();
echo $this->form->input('id' , array('type'=>'hidden', 'value'=> $guild_id ));
echo $this->Form->input('name',  [ 'class' => 'form-control' ]);
echo '<br/>';
echo $this->Form->button("Create a new guild", [ 'class' => 'btn btn-primary ']);
echo $this->Form->end();
echo '<br/>';?>


<?php echo $messG;?>
