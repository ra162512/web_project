<title>CustomFighter</title>
<?php if($exist==1){ ?>
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


        <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >Fighter Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          
                       <img alt="User Pic" src="https://i.pinimg.com/736x/3a/a5/db/3aa5dbd7c2b9a2ead71406b3d074cbd5--fight-club-brad-pitt-fight-club-.jpg"  id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                           
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
 <?php   
echo $this->Form->create($particularRecord, ['enctype' => 'multipart/form-data']);
?><h2><?php echo $this->Form->select('name',$list)?></h2> 
                            
                            
                            <p>your   <b> Actual Fighter</b></p>
                          
                           
                          </div>
                           <hr>
                           
<?php
echo $this->Form->input('upload', ['type' => 'file']);
echo $this->Form->hidden('choix',['value' => 1]);
echo '<br/>';
echo $this->Form->button('Select fighter',   ['class'=>'btn btn-primary  btn-lg']);
echo $this->Form->end(); 
?>
     <p>If you want to change avatar, select a file first, or just select fighter</p>
<style>
  .ima {width: 180px; height: 200px;}
  </style>
     <?php   if ($choix==1){ 
 if(!empty($this->Html->image('avatar/' . $fighter_id . '.jpg'))){
    echo $this->Html->image('avatar/' . $fighter_id . '.jpg', ['class'=>'img-circle ima']);
    
}else{ echo $this->Html->image('avatar/avatar.jpg', ['class'=>'img-circle ima']);}?>
    <tr>
        <td><?= $fighter_name?></td>
        <td><?= $level?> </td>
        <td><?= $xp?></td>
        <td><?= $skill_strength?></td>
        <td><?= $skill_health?>
        <td><?= $fighter_sight?></td>

        <div class="levelbar">
            <h4> Level </h4>
            <?php
            $total_prize=4;
            $paid_amount=$level;
            $width = round(($paid_amount/$total_prize)*100,2);

            echo '<div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="'.$width.'"
              aria-valuemin="0" aria-valuemax="'.$total_prize.'" style="width:'.$width.'%">
                '.$width.'% Complete 
                   </div>
              </div>'; ?>
        </div>

            <div class="xpbar">
            <h4> XP </h4>
            <?php
            $total_prize=2;
            $paid_amount=$xp;
            $width = round(($paid_amount/$total_prize)*100,2);

            echo '<div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="'.$width.'"
              aria-valuemin="0" aria-valuemax="'.$total_prize.'" style="width:'.$width.'%">
                '.$width.'% Complete 
                   </div>
              </div>'; ?>
        </div>

        <div class="strength">
                   <h4> Strength </h4>
                   <?php
                   $total_prize=25; /*<--valeur aléatoire >*/
                   $paid_amount=$skill_strength;
                   $width = round(($paid_amount/$total_prize)*100,2);

                   echo '<div class="progress">
                     <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="'.$width.'"
                     aria-valuemin="0" aria-valuemax="'.$total_prize.'" style="width:'.$width.'%">
                       '.$width.'% 
                          </div>
                     </div>'; ?>
               </div>

              
                   <h4> Sight </h4>
                   <?php
                   $total_prize=10; 
                   $paid_amount=$fighter_sight;
                   $width = round(($paid_amount/$total_prize)*100,2);

                   echo '<div class="progress">
                     <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="'.$width.'"
                     aria-valuemin="0" aria-valuemax="'.$total_prize.'" style="width:'.$width.'%">
                       Life '.$width.'% 
                          </div>
                     </div>'; ?>
               </div>



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
echo $this->Form->button('Upgrade strength',   ['class'=>'btn btn-primary  btn-lg']);
echo $this->Form->end();

echo $this->Form->create('Ameliorer2');
echo $this->Form->select('name',$list);
echo $this->Form->hidden('choix',['value' => 4]);
echo $this->Form->button('Upgrade health',   ['class'=>'btn btn-primary  btn-lg']);
echo $this->Form->end();

echo $this->Form->create('Ameliorer3');
echo $this->Form->select('name',$list);
echo $this->Form->hidden('choix',['value' => 5]);
echo $this->Form->button('Upgrade sight',   ['class'=>'btn btn-primary  btn-lg']);
echo $this->Form->end();
 }}
    }
else{
    echo "you need to create a fighter first";
} ?>
