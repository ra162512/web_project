<title>Diary</title>

<body>
    <h4>Your events</h4>
    <br/>
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
  
