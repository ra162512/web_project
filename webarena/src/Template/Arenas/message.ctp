
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<div class="message form">
<?= $this->Flash->render() ?>
<?= $this->Form->create('envoyer') ?>
    <fieldset>
      
        <legend><?= __("Boite de messagerie"); ?></legend>
        
        <?= $elem1; ?>  </br>
        <?= "choisissez votre personnage"; echo $this->Form->select('namefrom',$list); ?>
         <?= "choisissez le personnage a qui envoyer"; echo $this->Form->select('namedest',$list1); ?>
          <?= $this->Form->control('titre'); ?>
        <?= $this->Form->control('message'); ?>   
       
    </fieldset>
    
<?= $this->Form->button(__('Envoyer')); 


 
?>
    
<?= $this->Form->end() ?>


<div class="lire message">
</br> </br> </br> </br> </br>
<?= $this->Flash->render() ?>
<?= $this->Form->create('recevoir') ?>
    <fieldset>
        
        <?= "choisissez de quel personnage souhaitez vous lire les messages?"; echo $this->Form->select('namefrom',$list3); ?>
      <?= "choisissez avec quel personnage?"; echo $this->Form->select('namewith',$list4); ?>
       
    <?php   echo $mess; ?>
    </fieldset>
    
<?= $this->Form->button(__('Lire')); 


 
?>
    
<?= $this->Form->end() ?>


</div>
