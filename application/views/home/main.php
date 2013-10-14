
<div id="content">
	<style type="text/css">
	<!--
	.site-box {
          width : 200px;
          border: 1px solid #FF9900;
	}
	-->
	</style>

	<form action="serch" method="post">
	<p>キーワード：<input type="text"><input type="submit" value="検索" </p>
	</form>
 <?php
 	for($i = 0;i<$event_array_amount;$i++){
 		echo '<div class="site-box">'
 		echo '<img src ="' + $event_img_array[i] '" width="200" height="100">';
 		echo '<p>' . $event_title_array[i] . '</p>';
 		echo '<p>１０月１５日</p>'
		echo '<p>駅から徒歩５分</p>'
		echo '<p>ただいま　２/４　人</p>'
		echo '<p>１９：００〜２４：００<p/>'
 		echo '</div>'
 	}
 	
 	foreach($tags as $tag){
 		echo $tag;
 	}
 ?>

</div>

