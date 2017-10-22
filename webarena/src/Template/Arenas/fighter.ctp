<?php $this->assign('title', 'Combattant');?>

Are you ready for the fight ?

<html>
    <p> Crée votre personnage: </p>

    <a href="newfighter"><input type="button" name="créer un combatant "value="créer un combatant "/></a>

    <p> Crée une guilde: </p>

    <a href="newguilde"><input type="button" name="créer une guilde "value="créer une guilde "/></a>

    <div>

        <h1>Votre personnage:</h1>

        <?php echo $this->Html->image('perso.jpg', array('alt' => 'Photo du personnage', 'width' => '12%')); ?>

        <h2>Caractéristiques:</h2>

        <dl>
            <dt>Niveau:  <?php echo "$lvl";?></dt>
            <dt>Force: <?php echo "$strength";?></dt>
            <dt>Santé:  <?php echo "$health";?></dt>
            <dt>Experience:  <?php echo "$exp";?></dt>
        </dl>

        <?php
            if($exp >= 4) {

            echo $this->Form->create('NewLevel');
            echo $this->Form->input('improve', array(
                'options' => array(
                    'strength'=>'+1 strength',
                    'sight'=>'+1 sight',
                    'health'=>'+3 health'
                    ),
                'default' => 'strength')
            );
            echo $this->Form->end('Level up !');
            }
        ?>

        <?php pr($raw); ?>

    </div>

</html>
