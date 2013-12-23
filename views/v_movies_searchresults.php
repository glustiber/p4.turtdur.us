<h2>Search results for .....</h2>

<?php foreach($results as $result): ?>

	<div class="movie-box">
		<img src="<?=$result['posters']['detailed']?>" class="movie-poster"/>
		<h3><?=$result['title']?></h3>
		<p>Critics score: <?=$result['ratings']['critics_score']?></p>
		<p>Audience score: <?=$result['ratings']['audience_score']?></p>
		<div class="clear"></div>
	</div>
<?php endforeach; ?>