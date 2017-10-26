<title>Arena</title>

<?php 
    $grid_width = 2;
    $grid_height = 2;
    $cell_width = 50;
    $cell_height = 50;
    $gutter = 3;
    
    echo '<div class="row">';
    echo '<div class="col-sm-6" style="background-color:black;"><br/></div>';
    echo '</div>';
    for ($i=0; $i<$grid_width; $i++){
        for($j=0; $j<$grid_height; $j++){
            
            echo '<div class="row">';
                for ($h=0; $h<3; $h++){
                    echo '<div class="col-sm-1" style="background-color:lavender;"><br/><br/><br/></div>';
                    echo '<div class="col-sm-1" style="background-color:slateblue;"><br/><br/><br/></div>';
                }
            echo '</div>';
            echo '<div class="row">';
            for ($h=0; $h<3; $h++){
                echo '<div class="col-sm-1" style="background-color:slateblue;"><br/><br/><br/></div>';
                echo '<div class="col-sm-1" style="background-color:lavender;"><br/><br/><br/></div>';
            }
            echo '</div>';
        }
    }
    echo '<div class="row">';
    echo '<div class="col-sm-6" style="background-color:black;"><br/></div>';
    echo '</div>';
    
?>


 