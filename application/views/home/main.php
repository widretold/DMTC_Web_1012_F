
<div id="content">

 <?php
 	for($i = 0;i<$event_array_amount;$i++){
 		echo '<div class="event">'
 		echo '<img src ="' + $event_img_array[i] '">';
 		echo $event_title_array[i];
 		echo '</div>'
 	}
 	
 	foreach($tags as $tag){
 		echo $tag;
 	}
 	
 	//FOR TEST
 		echo '<div class="event">'
 		echo '<img src ="' + $event_img'">';
 		echo $event_title;
 		echo '</div>'
 		
 	//End of TEST
 ?>

</div>
