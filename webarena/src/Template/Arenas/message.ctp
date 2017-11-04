<title>Messaging</title>
<div class="crier form">
<?= $this->Flash->render() ?>
<?= $this->Form->create('envoyer') ?>
    <fieldset>
      
        <legend><?= __("Scream Action"); ?></legend>
        
         <?= $elem8; ?>  </br>
         
          <?= $this->Form->control('Scream',['style'=>'border-radius : 13px']); ?>
         
        <?=  $this->Form->hidden('choix',['value' =>3]); ?>
    </fieldset>
    
<?= $this->Form->button(__(' Scream'),['class'=>'btn btn-danger glyphicon glyphicon-comment','style'=>'border-radius : 24px']); 


 
?>
    
<?= $this->Form->end() ?>


<?= '<br/><br/>' ?>

<div class="message form">
<?= $this->Flash->render() ?>
<?= $this->Form->create('envoyer') ?>
    <fieldset>
      
        <legend><?= __("Message Inbox"); ?></legend>
        
        <?= $elem1; ?>  </br>
        <?= "Choose your fighter : "; echo $this->Form->select('namefrom',$list,['class'=>'btn btn-default btn-sm dropdown-toggle','data-toggle'=>'dropdown', 'aria-haspopup'=>'true', 'aria-expanded'=>'true']); ?>
         <br/>
        <?= "Chose the fighter you want to send the message : "; echo $this->Form->select('namedest',$list1,['class'=>'btn btn-default btn-sm dropdown-toggle','data-toggle'=>'dropdown', 'aria-haspopup'=>'true', 'aria-expanded'=>'true']); ?>
          <?= $this->Form->control('title',['style'=>'border-radius : 13px']); ?>
        <?= $this->Form->control('message',['style'=>'border-radius : 13px']); ?>   
        <?=  $this->Form->hidden('choix',['value' => 1]); ?>
    </fieldset>
    
<?= $this->Form->button(__(' Send'),['class'=>'btn btn-danger glyphicon glyphicon-envelope','style'=>'border-radius : 24px']); 


 
?>
    
<?= $this->Form->end() ?>


<div class="lire message">
</br> </br> </br> 
<?= $this->Flash->render() ?>
<?= $this->Form->create('recevoir') ?>
    <fieldset>
        <legend><?= __("Check your messages"); ?></legend>
        <?= "From who do you want to read the message ? "; echo $this->Form->select('namefrom',$list3,['class'=>'btn btn-default btn-sm dropdown-toggle','data-toggle'=>'dropdown', 'aria-haspopup'=>'true', 'aria-expanded'=>'true']); ?>
        <br/>
      <?= "Choose with which fighter : "; echo $this->Form->select('namewith',$list4,['class'=>'btn btn-default btn-sm dropdown-toggle','data-toggle'=>'dropdown', 'aria-haspopup'=>'true', 'aria-expanded'=>'true']); ?>

      <?=  $this->Form->hidden('choix',['value' =>2]); ?>
       
   
    </fieldset>
    
<?= $this->Form->button(__(' Read'),['class'=>'btn btn-danger glyphicon glyphicon-eye-open','style'=>'border-radius : 24px']);  ?>
    
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