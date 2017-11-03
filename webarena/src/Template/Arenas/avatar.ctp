<title>CustomFighter</title>

<div class="large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Custom Fighter</h2>
		
	

<table>

    <tr>
        
        <th>Name </th>
        <th>Level</th>
        <th>XP</th>
        <th>Strength</th>
        <th>Health</th>
        <th>Sight</th>
    </tr>
 <?php   
echo $this->Form->create($particularRecord, ['enctype' => 'multipart/form-data']);
echo $this->Form->select('name',$list);
echo $this->Form->input('upload', ['type' => 'file']);
echo $this->Form->hidden('choix',['value' => 1]);
echo $this->Form->button('Change your avatar');
echo $this->Form->end(); 
     ?>
     <?php   if ($choix==1 ){ echo $this->Html->image('avatar/' . $fighter_id . '.jpg'); ?>
    <tr>
        <td><?= $fighter_name?></td>
        <td><?= $level?> </td>
        <td><?= $xp?></td>
        <td><?= $skill_strength?></td>
        <td><?= $skill_health?>
        <td><?= $fighter_sight?></td>
    </tr>
<br>
   
   <?php   if ($xp/4-$level<=0 ){ ?>

        <h3> You need <?= 1-($xp/4-$level) ?>  more xp </h3>
        <br>
    
  <?php }
     ?>


	
</div>
 <?php   if ($xp/4-$level>=0){
echo $this->Form->create('Ameliorer1');
echo $this->Form->select('name',$list);
echo $this->Form->hidden('choix',['value' => 3]);
echo $this->Form->button('Upgrade strength');
echo $this->Form->end();

echo $this->Form->create('Ameliorer2');
echo $this->Form->select('name',$list);
echo $this->Form->hidden('choix',['value' => 4]);
echo $this->Form->button('Upgrade health');
echo $this->Form->end();

echo $this->Form->create('Ameliorer3');
echo $this->Form->select('name',$list);
echo $this->Form->hidden('choix',['value' => 5]);
echo $this->Form->button('Upgrade sight');
echo $this->Form->end();
 }}
     ?>
