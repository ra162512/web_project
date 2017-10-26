
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



<div class="lire message">
</br> </br> </br> </br> </br>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        
        <?= "choisissez de quel personnage souhaitez vous lire les messages?"; echo $this->Form->select('namefrom',$list3); ?>
      <?= "choisissez avec quel personnage?"; echo $this->Form->select('namewith',$list4); ?>
       
       
    </fieldset>
    
<?= $this->Form->button(__('Lire')); 


 
?>
    
<?= $this->Form->end() ?>

  <?php
          
            
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
        ?>

</div>