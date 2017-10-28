<title>Arena</title>
 <?php echo $this->fetch("css"); ?>
<?php 
    $grid_width = 15;
    $grid_height = 5;
    $cell_width = 50;
    $cell_height = 50;
    $gutter = 3;
   
   
   
    echo '<div class="row">';
    echo '<div class="col-sm-6" style="background-color:black;"><br/></div>';
    echo '</div>';
    
for ($i=0; $i<10; $i++){
    for ($h=0; $h<15; $h++){
           
                                       
        if($i%2==0)
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
        else{
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
       
        echo '<br/>';
    }
        
        /*
           // echo '<div class="row">';
                for ($h=0; $h<7; $h++){
                    if($tab_posX_sur[$i]==1&&$tab_posY_sur[$h]==1)
                    {
                        echo $this->Html->image('buisson.jpg', ['alt'=>'Cake', 'height' => 60, 'width'=>60]);
                        echo $this->Html->image('herbe2.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);  
                           
                    } 
                    else{
                          
                              echo $this->Html->image('herbe1.jpg', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                              echo $this->Html->image('herbe2.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);
                    
                    }
                    echo '<div class="col-sm-1" style="background-color:lavender; width:75px; height:75px;"><br/><br/><br/></div>';                    
                    echo '<div class="col-sm-1" style="background-color:slateblue; width:75px; height:75px;"><br/><br/><br/></div>';
                }
                echo '<br/>';
               //echo '<div class="col-sm-1" style="background-color:lavender; width:75px; height:75px;"><br/><br/><br/></div>';  
            //echo '</div>';
            
            //echo '<div class="row">';
            for ($h=0; $h<7; $h++){
               if($tab_posX_sur[$i]==1&&$tab_posY_sur[$h]==1){
                echo $this->Html->image('buisson.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);
                echo $this->Html->image('herbe1.jpg', ['alt'=>'Cake', 'height' => 60, 'width'=>60]);
                   
            }  
            else{
                echo $this->Html->image('herbe2.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);
                echo $this->Html->image('herbe1.jpg', ['alt'=>'Cake', 'height' => 60, 'width'=>60]);
                
                
            }
            }
            echo '<br/>';
            //echo '<div class="col-sm-1" style="background-color:slateblue; width:75px; height:75px;"><br/><br/><br/></div>';
            //echo '</div>';
            
        */
    
    echo '<div class="row">';
    echo '<div class="col-sm-6" style="background-color:black;"><br/></div>';
    echo '</div>';

 
    ?>

<div class="wesh"> wesh </div>


 