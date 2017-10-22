<?php $this->assign('title', 'Journal');?>

<p> Ci-dessous les derniers évènements de vos combats : </p>

<table id='events'>
    
    <?php echo $truc ?>
    
	<tr>
		<th>Date</th>
		<th>Evénement</th>
		<th>Coordonées</th>
	</tr>
        
	<?php foreach($events as $e) {
		$event = $e['events'];
		echo '<tr>';
			echo '<td>' . $event['date'] . '</td>';
			echo '<td>' . $event['name'] . '</td>';
			echo '<td>x : ' . $event ['coordinate_x'] . ' | y : ' . $event['coordinate_y'] . '</td>';
		echo '</tr>';?>		
	<?php } ?>
        
</table>