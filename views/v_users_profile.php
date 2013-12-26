<h2>My Profile</h2>

	<? if($user->profile_pic != ""): ?>
		<div class="profile-pic">
			<img src="<?=$user->profile_pic?>" alt="<?=basename($user->profile_pic)?>" class="profile-image"/>
		</div>
	<? endif; ?>

	<div class="profile-info">

		<br>
		<strong>Name:</strong> <?=$user->first_name?> <?=$user->last_name?><br>
		<strong>E-mail:</strong> <?=$user->email?><br>
		<? if($user->location != ""): ?>
			<strong>Location:</strong> <?=$user->location?><br>
		<? endif; ?>
		<? if($user->website != ""): ?>
			<strong>Website:</strong> <a href="<?=$user->website?>"><?=$user->website?></a><br>
		<? endif; ?><br>

		<a href='/users/editprofile'>Edit Profile</a>

	</div>
<br class="clear">
<hr>
	<div class='profile-reviews'>
		<h2>My Reviews</h2>

		<? if(empty($reviews)): ?>
			You have not reviewed any movies.
		<? else: ?>

			<?php foreach($reviews as $review): ?>

			<article class="movie-box">

			    <!--<h4><?=$post['first_name']?> <?=$post['last_name']?> posted:</h4>-->
			    <h4><?=$review['movie_title']?> (Rating: <?=$review['rating']?>)</h4>
			    <p><?=$review['content']?></p>

	        <?=Time::display($review['created'],'m/d/Y')?> &#149
	        <?=Time::display($review['created'],'g:i a')?>

			</article><br>

			<?php endforeach; ?>
		<? endif; ?>
	</div>