<title>Arena</title>

<section style="display :grid; grid-template-columns: 950px 250px; grid-template-rows: 950px ;">

    <section style="grid-column: 1; grid-row: 1;">
<?php 
    $grid_width = 15;
    $grid_height = 5;
    $cell_width = 50;
    $cell_height = 50;
    $gutter = 3;
    $posX=$pos_cour[0]-1;
    $posY=$pos_cour[1]-1;
    
for ($i=0; $i<10; $i++){
    for ($h=0; $h<15; $h++){       
       
     if((abs($posX-$i)+abs($posY-$h))<=$sight )  
         { if($i%2==0)
                {               
                    if($h%2==0)
                    {
                         if($tab_pos_fig[$i][$h]==1)
                                    {
                                        
                                         echo $this->Html->image('fighter.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                        else if($tab_pos_sur[$i][$h]==1)
                                    {
                                         echo $this->Html->image('buisson3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                         
                                    }
                        else if($tab_pos_tool[$i][$h]==1)
                                    {
                                         echo $this->Html->image('epee2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                        else        {
                                        echo $this->Html->image('herbe1.jpg', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                    }
                    else{
                        if($tab_pos_fig[$i][$h]==1)
                                    {
                                         echo $this->Html->image('fighter.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                        else if($tab_pos_sur[$i][$h]==1)
                                    {
                                        echo $this->Html->image('buisson4.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                         
                                    }
                        else if($tab_pos_tool[$i][$h]==1)
                                    {
                                     echo $this->Html->image('epee3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                        else{
                                    echo $this->Html->image('herbe2.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);
                            }
                        }
                }
        else {
                    if($h%2==0)
                    {
                        if($tab_pos_fig[$i][$h]==1)
                            {
                                    echo $this->Html->image('fighter.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                            }
                        else if($tab_pos_sur[$i][$h]==1)
                            {
                                    echo $this->Html->image('buisson4.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                         
                            }
                          else if($tab_pos_tool[$i][$h]==1)
                            {
                                    echo $this->Html->image('epee3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                            }
                         else
                            {
                                    echo $this->Html->image('herbe2.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);
                            }
                    }
                    else
                    {
                        if($tab_pos_fig[$i][$h]==1)
                            {
                                    echo $this->Html->image('fighter.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                            }
                        else if($tab_pos_sur[$i][$h]==1)
                            {
                                    echo $this->Html->image('buisson3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                            }
                         else if($tab_pos_tool[$i][$h]==1)
                            {
                                    echo $this->Html->image('epee2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                            }
                        else
                            {
                                    echo $this->Html->image('herbe1.jpg', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                            }
                    }                                
                } 
         }
         else
             {
            echo $this->Html->image('noir.jpg', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
        }
        }       
        echo '<br/>';
    }
    
      echo $posX;
        echo $posY;
       ?>
        
       
    </section>    
    <section style="grid-column: 2; grid-row: 1;">
       
   
     <?php        echo  $this->Form->postButton('up',['controller' => 'Arenas', 'action' => 'arena'],['data'=>['dep'=>'0']]);       ?>
      <?php       echo  $this->Form->postButton('down',['controller' => 'Arenas', 'action' => 'arena'],['data'=>['dep'=>'1']]);     ?>
      <?php       echo  $this->Form->postButton('right',['controller' => 'Arenas', 'action' => 'arena'],['data'=>['dep'=>'2']]);    ?>
      <?php       echo  $this->Form->postButton('left',['controller' => 'Arenas', 'action' => 'arena'],['data'=>['dep'=>'3']]);     ?>
      <?php       echo $mess;       ?>
     
       <?php
       if($tab_pos_tool[$posX][$posY]==1){
       echo  $this->Form->postButton('attaquer',['controller' => 'Arenas', 'action' => 'arena'],['data'=>['dep'=>'4']]);   
       }
       
       ?>
        
    </section>
</section>



