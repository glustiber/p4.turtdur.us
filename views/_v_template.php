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
					<li><a href='#'>Movies</a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'>TV Shows</a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'>Music</a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'>Video Games</a>
						<ul>
							<li><a href='#'>m1</a></li>
							<li><a href='#'>m2</a></li>
							<li><a href='#'>m3</a></li>
						</ul>
					</li>
					<li><a href='#'>Books</a>
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

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>