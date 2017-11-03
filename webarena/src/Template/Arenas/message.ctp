<title>Messaging</title>
<div class="crier form">
<?= $this->Flash->render() ?>
<?= $this->Form->create('envoyer') ?>
    <fieldset>
      
        <legend><?= __("Scream Action"); ?></legend>
        
         <?= $elem8; ?>  </br>
         
          <?= $this->Form->control('Message'); ?>
         
        <?=  $this->Form->hidden('choix',['value' =>3]); ?>
    </fieldset>
    
<?= $this->Form->button(__('Scream')); 


 
?>
    
<?= $this->Form->end() ?>




<div class="message form">
<?= $this->Flash->render() ?>
<?= $this->Form->create('envoyer') ?>
    <fieldset>
      
        <legend><?= __("Message Inbox"); ?></legend>
        
        <?= $elem1; ?>  </br>
        <?= "Choose your fighter"; echo $this->Form->select('namefrom',$list); ?>
         <?= "Chose the fighter you want to send the message"; echo $this->Form->select('namedest',$list1); ?>
          <?= $this->Form->control('title'); ?>
        <?= $this->Form->control('message'); ?>   
        <?=  $this->Form->hidden('choix',['value' => 1]); ?>
    </fieldset>
    
<?= $this->Form->button(__('Send')); 


 
?>
    
<?= $this->Form->end() ?>


<div class="lire message">
</br> </br> </br> </br> </br>
<?= $this->Flash->render() ?>
<?= $this->Form->create('recevoir') ?>
    <fieldset>
        
        <?= "From who do you want to read the message ?"; echo $this->Form->select('namefrom',$list3); ?>
      <?= "Choose with which fighter"; echo $this->Form->select('namewith',$list4); ?>

      <?=  $this->Form->hidden('choix',['value' =>2]); ?>
       
   
    </fieldset>
    
<?= $this->Form->button(__('Read'));  ?>
    
<?= $this->Form->end() ?>
   




<br/>

 <?php
            
          if($mess==2){
           
            $titre=$listmessages[0];
             $message=$listmessages[2];
             $date=$listmessages[3];
             $taille=count($message);
             
             for($i=0;$i<$taille;$i++)
                {   
                    echo " de: ";
                    echo $listnom[$i];
                    echo ", titre : ";
                    echo $titre[$i];
                    echo ", message : ";
                    echo $message[$i];
                    echo "                date ";
                    echo $date[$i];
                    ?> <br/> <?php

                }
                
                
          }
        ?>
</div>