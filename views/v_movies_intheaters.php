<h2>In Theaters</h2>

<?php foreach($results as $result): ?>

	<div class="movie-box">
		<img src="<?=$result['posters']['detailed']?>" class="movie-poster"/>
		<p><?=$result['title']?></p>
		<p>Critics score: <?=$result['ratings']['critics_score']?></p>
		<p>Audience score: <?=$result['ratings']['audience_score']?></p>
		<div class="clear"></div>
	</div>
	
<?php endforeach; ?>