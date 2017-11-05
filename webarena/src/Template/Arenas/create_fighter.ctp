
<title>CreateFighter</title>
<h1>Create a new Fighter</h1>
<?php

    $id = rand(0,100000);
    do{
    $x = rand(1,10);
    $y = rand(1,15);
    }while($x==$posx && $y=posy);
    $defaultLevel = 1;
    $defaultXP = 0;
    $defaultSight = 2;
    $defaultStrength = 1;
    $defaultHealth = 5;

    echo $this->Form->create();
    echo $this->form->input('id' , array('type'=>'hidden', 'value'=> $id ));
    echo $this->Form->input('name');
    echo $this->Form->input('player_id', array('type'=>'hidden','value'=> $player_id));
    echo $this->form->input('coordinate_x' , array('type'=>'hidden', 'value'=> $x ));
    echo $this->form->input('coordinate_y' , array('type'=>'hidden', 'value'=> $y ));
    echo $this->form->input('level' , array('type'=>'hidden', 'value'=> $defaultLevel ));
    echo $this->form->input('xp' , array('type'=>'hidden', 'value'=> $defaultXP ));
    echo $this->form->input('skill_sight' , array('type'=>'hidden', 'value'=> $defaultSight ));
    echo $this->form->input('skill_strength' , array('type'=>'hidden', 'value'=> $defaultStrength ));
    echo $this->form->input('skill_health' , array('type'=>'hidden', 'value'=> $defaultHealth ));
    echo $this->form->input('current_health' , array('type'=>'hidden', 'value'=> 5 ));
    echo $this->form->input('guild_id', array('placeholder'=>'id de la guilde', 'type'=>'text'));

    echo $this->Form->button(__("Create a Fighter"));
    echo $this->Form->end();
   
    ?>

    <h2> Information </h2>
    <?php echo $message; ?>
