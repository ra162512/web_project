<title>Arena</title>

<?php 
    $grid_width = 15;
    $grid_height = 5;
    $cell_width = 50;
    $cell_height = 50;
    $gutter = 3;
    
    echo '<div class="row">';
    echo '<div class="col-sm-6" style="background-color:black;"><br/></div>';
    echo '</div>';
    for ($i=0; $i<$grid_height; $i++){            
            //echo '<div class="row">';
                for ($h=0; $h<7; $h++){
                    echo $this->Html->image('herbe1.jpg', ['alt'=>'Cake', 'height' => 60, 'width'=>60]);
                    echo $this->Html->image('herbe2.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);
                    //echo '<div class="col-sm-1" style="background-color:lavender; width:75px; height:75px;"><br/><br/><br/></div>';                    
                    //echo '<div class="col-sm-1" style="background-color:slateblue; width:75px; height:75px;"><br/><br/><br/></div>';
                }
                echo '<br/>';
               //echo '<div class="col-sm-1" style="background-color:lavender; width:75px; height:75px;"><br/><br/><br/></div>';  
            //echo '</div>';
            
            //echo '<div class="row">';
            for ($h=0; $h<7; $h++){
                echo $this->Html->image('herbe2.jpg', ['alt'=>'Cake0', 'height' => 60, 'width'=>60]);
                echo $this->Html->image('herbe1.jpg', ['alt'=>'Cake', 'height' => 60, 'width'=>60]);
                    
                //echo '<div class="col-sm-1" style="background-color:slateblue; width:75px; height:75px;"><br/><br/><br/></div>';
                //echo '<div class="col-sm-1" style="background-color:lavender; width:75px; height:75px;"><br/><br/><br/></div>';
            }
            echo '<br/>';
            //echo '<div class="col-sm-1" style="background-color:slateblue; width:75px; height:75px;"><br/><br/><br/></div>';
            //echo '</div>';
            
        
    }
    echo '<div class="row">';
    echo '<div class="col-sm-6" style="background-color:black;"><br/></div>';
    echo '</div>';

    echo $arene[0][1];
    ?>




 