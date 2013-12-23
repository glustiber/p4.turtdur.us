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