<title>Arena</title>

<section style="display :grid; grid-template-columns: 900px 250px; grid-template-rows: 950px ;">

    <section style="grid-column: 1; grid-row: 1;">
<?php 
    $grid_width = 15;
    $grid_height = 5;
    $cell_width = 50;
    $cell_height = 50;
    $gutter = 3;
    
    $j=0;
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
                $j++;  
                //echo '<div class="col-sm-1" style="background-color:slateblue; width:75px; height:75px;"><br/><br/><br/></div>';
                //echo '<div class="col-sm-1" style="background-color:lavender; width:75px; height:75px;"><br/><br/><br/></div>';
            
            }
            echo '<br/>';
            //echo '<div class="col-sm-1" style="background-color:slateblue; width:75px; height:75px;"><br/><br/><br/></div>';
            //echo '</div>';
            
        
    }
   
    ?>
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





