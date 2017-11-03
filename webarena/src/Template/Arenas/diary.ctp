<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diary</title>

  
  
  
  
  
  
    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->fetch("css"); ?>

  </head>

  <body>
      <h1> DIARY </h1>
      
      
        <?php 
        for($i=0;$i<count($tab_event);$i++)
        {  
            echo $tab_event[$i]->name;
            echo " a ";
            echo $tab_event[$i]->date;
            echo " en position x:  ";
            echo $tab_event[$i]->coordinate_x; 
            echo " y: ";
            echo $tab_event[$i]->coordinate_y; 
            echo "<br/>";
        }
    
        
        ?>
  </body>
  
</html>
  
