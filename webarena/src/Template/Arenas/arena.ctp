<title>Arena</title>

<section style="display :grid; grid-template-columns: 950px 250px; grid-template-rows: 950px ;">

    <section style="grid-column: 1; grid-row: 1;">
<?php 
    $grid_width = 15;
    $grid_height = 5;
    $cell_width = 50;
    $cell_height = 50;
    $gutter = 3;

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
    } ?>
        
    </section>    
    <section style="grid-column: 2; grid-row: 1;">
        <?php 
            echo $this->Form->create();
            $tabl_direction = array('Haut', 'Bas', 'Droite', 'Gauche');
            echo "Choisissez la direction"; 
            echo '<br/>';
            echo $this->Form->select('direction',$tabl_direction, ['class' => 'btn dropdown-toggle', 'data-toggle' => 'dropdown']);
            echo $this->Form->button('Envoyer',['class' => 'btn btn-primary']);
            echo $this->Form->end();
            echo $mess;
        ?>
        
    </section>
</section>



