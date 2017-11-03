<title>Arena</title>
<?php  if($existe==1){  ?>
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
                                        if($tab_type_sur[$i][$h]=="buisson"){
                                                echo $this->Html->image('buisson3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                     }
                                         if($tab_type_sur[$i][$h]=="arbre"){
                                                echo $this->Html->image('arbre1vrai.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                        
                                                     }
                                                     if($tab_type_sur[$i][$h]=="pierre"){
                                                echo $this->Html->image('pierre1.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                        
                                                     }
                                    }
                        else if($tab_pos_tool[$i][$h]==1)
                                    {
                                         if($tab_type_tool[$i][$h]=="epee"){
                                         echo $this->Html->image('epee2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }
                                         if($tab_type_tool[$i][$h]=="coeur"){
                                         echo $this->Html->image('coeur1.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }
                                          if($tab_type_tool[$i][$h]=="vue"){
                                         echo $this->Html->image('vue1.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }                                                                           
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
                                        if($tab_type_sur[$i][$h]=="buisson"){
                                                echo $this->Html->image('buisson4.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }
                                        if($tab_type_sur[$i][$h]=="arbre"){
                                                 echo $this->Html->image('arbre2vrai.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                }
                                                if($tab_type_sur[$i][$h]=="pierre"){
                                                 echo $this->Html->image('pierre2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                }
                                    }
                        else if($tab_pos_tool[$i][$h]==1)
                                    {
                                                                           
                            if($tab_type_tool[$i][$h]=="epee"){
                                         echo $this->Html->image('epee3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                     }
                            if($tab_type_tool[$i][$h]=="coeur"){
                                         echo $this->Html->image('coeur2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }
                           if($tab_type_tool[$i][$h]=="vue"){
                                         echo $this->Html->image('vue2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                             }   
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
                                    if($tab_type_sur[$i][$h]=="buisson"){
                                                echo $this->Html->image('buisson4.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                                     if($tab_type_sur[$i][$h]=="arbre"){
                                                 echo $this->Html->image('arbre2vrai.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                } 
                                                if($tab_type_sur[$i][$h]=="pierre"){
                                                 echo $this->Html->image('pierre2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                }
                            }
                          else if($tab_pos_tool[$i][$h]==1)
                            {
                                      if($tab_type_tool[$i][$h]=="epee"){
                                         echo $this->Html->image('epee3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                                     if($tab_type_tool[$i][$h]=="coeur"){
                                         echo $this->Html->image('coeur2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }
                                    if($tab_type_tool[$i][$h]=="vue"){
                                         echo $this->Html->image('vue2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }                                       
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
                            {    if($tab_type_sur[$i][$h]=="buisson"){
                                    echo $this->Html->image('buisson3.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                                    if($tab_type_sur[$i][$h]=="arbre"){
                                                 echo $this->Html->image('arbre1vrai.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                } 
                                    if($tab_type_sur[$i][$h]=="pierre"){
                                                 echo $this->Html->image('pierre1.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                }
                                   
                            }
                         else if($tab_pos_tool[$i][$h]==1)
                            {
                               if($tab_type_tool[$i][$h]=="epee"){
                                         echo $this->Html->image('epee2.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                    }
                                if($tab_type_tool[$i][$h]=="coeur"){
                                         echo $this->Html->image('coeur1.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }
                                if($tab_type_tool[$i][$h]=="vue"){
                                         echo $this->Html->image('vue1.png', ['alt'=>'Cake2', 'height' => 60, 'width'=>60]);
                                                                            }   
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
    
      
       
       ?>
        
       
    </section>    
    <section style="grid-column: 2; grid-row: 1;">
        <section style="display :grid; grid-template-columns: 83px 83px 83px; grid-template-rows: 30px 30px 30px ;">

            <section style="grid-column: 2; grid-row: 1;">          
                <?php        echo  $this->Form->postButton('up',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'0']]);       ?>
            </section>
            <section style="grid-column: 2; grid-row: 3;">     
                <?php       echo  $this->Form->postButton('down',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'1']]);     ?>
            </section>
            <section style="grid-column: 3; grid-row: 2;">    
                <?php       echo  $this->Form->postButton('right',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'2']]);    ?>
            </section>
            <section style="grid-column: 1; grid-row: 2;">  
                <?php       echo  $this->Form->postButton('left',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'3']]);     ?>
            </section>
        </section>
            <?php echo '<br/>'; ?>
            <?php echo $mess; ?>
            <?php echo '<br/>'; ?>
            
               
 <?php
       if($tab_pos_tool[$posX][$posY]==1){
       echo  $this->Form->postButton('attraper',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'4']]);   
       }
       
       ?>
 <?php
       if($posX<9){
       if($tab_pos_fig[$posX+1][$posY]==1){
       echo  $this->Form->postButton('attaquer',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'6']]); 
       echo $reussite;
       }
       }
       if($posX>1){
       if($tab_pos_fig[$posX-1][$posY]==1){
       echo  $this->Form->postButton('attaquer',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'7']]); 
       echo $reussite;                                   }
                   }
       if($posY<14){
       if($tab_pos_fig[$posX][$posY+1]==1){
       echo  $this->Form->postButton('attaquer',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'8']]); 
        echo $reussite;                                    }
                    }
       if($posY>1){
       if($tab_pos_fig[$posX][$posY-1]==1){                                   
       echo  $this->Form->postButton('attaquer',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'9']]); 
       echo $reussite;
       
       }
       }
       
       ?>
        <?php echo  $this->Form->postButton('Créer des Objets',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'5']]);
        ?>
        <?php echo  $this->Form->postButton('Générer un décor',['controller' => 'Arenas', 'action' => 'sight'],['data'=>['dep'=>'10']]);
        ?>
    </section>
</section>

<?php }

else{
    echo "veuillez creer un fighter pour jouer dans l'arène";

  }
 

