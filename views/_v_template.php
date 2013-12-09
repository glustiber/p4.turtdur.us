<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

	<link rel="stylesheet" type="text/css" href="/css/master-styles.css">
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<div class='fluid-container'>

		<header>

		</header>

		<div class='fluid-container-inner'>

			<div class='left-nav'>
				
				<ul id='nav-list'>
					<li><a href='placekitten.com/500/500'>Movies</a></li>
					<li><a href='placekitten.com/500/500'>TV Shows</a></li>
					<li><a href='placekitten.com/500/500'>Music</a></li>
					<li><a href='placekitten.com/500/500'>Video Games</a></li>
					<li><a href='placekitten.com/500/500'>Books</a></li>
				</ul>

			</div>

			<div class='right-content'>

				<?php if(isset($content)) echo $content; ?>

			</div>

		</div>

	</div>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>