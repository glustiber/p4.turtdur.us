<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

	<link rel="stylesheet" type="text/css" href="/css/master-styles.css">

	<!--<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

	<!--<script src="/js/tooltip.js"></script>-->
	<!--<script src="/js/popover.js"></script>-->

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<div class='fluid-container'>

		<header>
			<div class='header-menu'>

				<?php if($user): ?>
					<div class='header-menu-item' id='account-menu'><a href='#'>account</a>
					<ul>
						<li><a href='/users/profile/'>view profile</a></li>
			    		<li><a href='/users/editprofile'>edit profile</a></li>
			    	</ul>			
			    	</div>
					<div class='header-menu-item'><a href='/users/logout'>logout</a></div>
		        <?php else: ?>
			        <div class='header-menu-item'><a href='/users/login'>log in</a></div>
					<div class='header-menu-item'><a href='/users/signup'>sign up</a></div>
		        <?php endif; ?>

				<span class='search'>
					<input type='text' class='search-bar' id='search-bar-input'>    
					<input type='submit' value='Search' class='search-bar' id='search-bar-submit'>
				</span>
			</div>
			<div class='logo header-menu-item'><a href='/'>p4.turtdur.us</a></div>
		</header>

		<div class='fluid-container-inner'>

			<div class='left-nav'>
				
				<ul id='nav-list'>
					<li id="movies"><a href='#'><img src='/uploads/movies-icon.png' class='nav-icon' alt='movie-icon'><span class='nav-item'>Movies</span></a>
						<ul> 
							<li class='movie-menu-title'>Theaters</li>
							<li id="in-theaters"><a href='#'>In-theaters</a></li>
							<li id="box-office"><a href='#'>Box office</a></li>
							<li id="opening"><a href='#'>Opening</a></li>
							<li id="coming-soon"><a href='#'>Coming soon</a></li>
							<li class='movie-menu-title'>DVDs</li>
							<li id="top-rentals"><a href='#'>Top rentals</a></li>
							<li id="current-releases"><a href='#'>Current releases</a></li>
							<li id="new-releases"><a href='#'>New releases</a></li>
							<li id="upcoming-dvds"><a href='#'>Upcoming</a></li>

						</ul>
					</li>
					<li id="tvshows"><a href='#'><img src='/uploads/tv-icon.png' class='nav-icon' alt='tv-icon'><span class='nav-item'>TV Shows</span></a>
						<!--<ul>
							<li><a href='#'>subnav1</a></li>
							<li><a href='#'>subnav2</a></li>
							<li><a href='#'>subnav3</a></li>
						</ul>-->
					</li>
					<li id="music"><a href='#'><img src='/uploads/music-icon.png' class='nav-icon' alt='music-icon'><span class='nav-item'>Music</span></a>
					
					</li>
					<li id="videogames"><a href='#'><img src='/uploads/games-icon.png' class='nav-icon' alt='games-icon'><span class='nav-item'>Video Games</span></a>
					
					</li>
					<li id="books"><a href='#'><img src='/uploads/books-icon.png' class='nav-icon' alt='books-icon'><span class='nav-item'>Books</span></a>

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