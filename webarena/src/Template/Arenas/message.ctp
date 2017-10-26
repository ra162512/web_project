

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<div class="message form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
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

</div>

