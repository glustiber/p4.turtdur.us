<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

	<link rel="stylesheet" type="text/css" href="/css/master-styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<div class='fluid-container'>

		<header>
			<div class='header-menu'>
				<div class='header-menu-item'>log in</div>
				<div class='header-menu-item'>sign up</div>
			</div>
			<div class='logo'>p4.turtdur.us</div>
		</header>

		<div class='fluid-container-inner'>

			<div class='left-nav'>
				
				<ul id='nav-list'>
					<li><a href='#'><img src='/uploads/movies-icon.png' class='nav-icon' alt='movie-icon'><span class='nav-item'>Movies</span></a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'><img src='/uploads/tv-icon.png' class='nav-icon' alt='tv-icon'><span class='nav-item'>TV Shows</span></a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'><img src='/uploads/music-icon.png' class='nav-icon' alt='music-icon'><span class='nav-item'>Music</span></a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'><img src='/uploads/games-icon.png' class='nav-icon' alt='games-icon'><span class='nav-item'>Video Games</span></a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'><img src='/uploads/books-icon.png' class='nav-icon' alt='books-icon'><span class='nav-item'>Books</span></a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
				</ul>

			</div>

			<div class='right-content'>

				<div class='inner-content'>
					<?php if(isset($content)) echo $content; ?>
				</div>

			</div>

		</div>

	</div>

	<script src="/js/master-scripts.js"></script>
	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>