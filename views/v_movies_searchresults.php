<h2>Search results for <?=$searchterms?></h2>

<?php foreach($results as $result): ?>

	 <p><?=$result['title']?></p>
	 <img src="<?=$result['posters']['thumbnail']?>" class="movie-poster"/>
	 <p>Critics score: <?=$result['ratings']['critics_score']?></p>
	 <p>Audience score: <?=$result['ratings']['audience_score']?></p>
	 <div class="clear"></div>
<?php endforeach; ?>