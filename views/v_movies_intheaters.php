<h2>In Theaters</h2>

<?php foreach($results as $result): ?>

	<div class="movie-box">
		<div class="user-options">
			<p>want to see it</p>
			<p>saw it</p>
			<p>like/dislike</p>
			<p><a href='/reviews/add/<?=$result['id']?>'>rate and review</a></p>
		</div>
		<img src="<?=$result['posters']['detailed']?>" class="movie-poster"/>
		<p><?=$result['title']?></p>
		<p>Critics: <?=$result['ratings']['critics_score']?>; Audience: <?=$result['ratings']['audience_score']?></p>
		<div class="clear"></div>
	</div>
	
<?php endforeach; ?>