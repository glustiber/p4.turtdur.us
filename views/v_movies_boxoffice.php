<h2>Box Office</h2>

<?php foreach($results as $result): ?>

	<div class="movie-box">
		<img src="<?=$result['posters']['detailed']?>" class="movie-poster"/>
		
		<div class='movie-info'>
			<h4><?=$result['title']?> (<?=$result['year']?>)</h4>
			<p><?=$result['mpaa_rating']?>, <?=$result['runtime']?> minutes</p>
			<p><strong>Critics:</strong> <?=$result['ratings']['critics_score']?> - <?=$result['ratings']['critics_rating']?>, <strong>Audience:</strong> <?=$result['ratings']['audience_score']?> - <?=$result['ratings']['audience_rating']?></p>
			<div class="user-options">
				<p>
					<a href='#' class='movie-info' id='<?=$result['id']?>'>Toggle Movie Info</a>
					<a href='#' class='review' id='<?=$result['id']?>'>Rate &amp; Review</a><br>
					<a href='#' class='reviews-list' id='<?=$result['id']?>'>Toggle Reviews</a>
				</p>
			</div>
		</div>
		<div class="clear"></div>
		<div class="view-reviews" id="<?=$result['id']?>reviews">
		<hr>
		<h4>Reviews for <?=$result['title']?></h4>
			<?php foreach($reviews as $review): ?>

			<?php if($review['movie_id'] == $result['id']): ?>

			<article class="review">

			    <!--<h4><?=$post['first_name']?> <?=$post['last_name']?> posted:</h4>-->
			    <p><?=$review['first_name']?> <?=$review['last_name']?> wrote:</p>
			    <p><?=$review['content']?></p>

	        <?=Time::display($review['created'],'m/d/Y')?> &#149
	        <?=Time::display($review['created'],'g:i a')?>

			</article><br>

			<?php endif; ?>

			<?php endforeach; ?>
		</div>
		<div class="write-review" id='<?=$result['id']?>review'>
		<hr>
		<h4>Write a Review for <?=$result['title']?></h4>

			<form method='POST' action='/reviews/p_add/<?=$result['id']?>/<?=$result['title']?>'>

				<label for='rating'><strong>Rating:</strong> </label><input type='range' name='rating' class='rating' id='<?=$result['id']?>rating' min='1' max='100' step ='1' required></input><span id='<?=$result['id']?>ratingcurrent'></span><br><br>
				<script>
				//$('#current-rating').html($('#rating').val());
/*
				$('#rating').on('change', function() { 
					$('#current-rating').html($('#rating').val());
				});
*/
				</script>	
				<div class='clear'></div>
			    <label for='content'><strong>Write review:</strong></label><br>
			    <textarea name='content' id='content' required></textarea>

			    <br><br>
			    <input type='submit' value='Submit Review'>

			</form>
		</div>

		<div class='additional-info' id='<?=$result['id']?>info'>
		<hr>

		<p><strong>Synopsis:</strong> <?=$result['synopsis']?></p>
		<hr>
		<p>
			<strong>Cast:</strong><br>
			<ul>
			<?php foreach($result['abridged_cast'] as $cast): ?>

			<li><?=$cast['name']?> as <?=$cast['characters'][0]?></li>

			<?php endforeach; ?>
			</ul>
		</p>
		<hr>
		<p><strong>Critics' consensus:</strong> <?=$result['critics_consensus']?></p>

		<p></p>
		</div>

	</div>
	
<?php endforeach; ?>