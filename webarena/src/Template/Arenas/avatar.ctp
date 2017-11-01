<?php $this->assign('title', "Custom Fighter");?>

<div class="large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Custom Fighter</h2>
		
	
	<?php 
        
        
echo $this->Form->create('Envoyer');
echo $this->Form->select('namefighter',$list);
echo $this->Form->hidden('choix',['value' => 1]);
echo $this->Form->button('Change your avatar');
echo $this->Form->end();

?>
<table>

    <tr>
        
        <th>Name </th>
        <th>Level</th>
        <th>XP</th>
        <th>Strength</th>
        <th>Health</th>
        <th>Sight</th>
    </tr>
 <?php   if($choix==1){
echo $this->Form->create($particularRecord, ['enctype' => 'multipart/form-data']);
echo $this->Form->input('upload', ['type' => 'file']);
$this->Form->hidden('choix',['value' => 2]);
echo $this->Form->button('Change your avatar');
echo $this->Form->end(); 
     ?>
    <tr>
        <td><?= $fighter_name?></td>
        <td><?= $level?> </td>
        <td><?= $xp?></td>
        <td><?= $skill_strength?></td>
        <td><?= $skill_health?>
        <td><?= $fighter_sight?></td>
    </tr>
<br>
    
   

        <h3> You need <?= (4-($xp/4)) ?>  more xp </h3>
        <br>
    



	
</div>
     <?php }
     ?>
