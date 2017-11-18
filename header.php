<html>
	<head>
		<title>Moje portfolio</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<?php wp_head() ?>
	</head>
	
<?php if(is_front_page()):
	$body_theme_classes = array('frontPage');
else:
	$body_theme_classes = array('otherPage');
endif; ?>
	
	<body <?php body_class($body_theme_classes); ?> ></body>
		<div class="container">
			
		
			
<?php if( get_header_image()): ?>
			<header>
				<div class="row">
					<img class="header-image" src="<?php header_image(); ?>" width="100%" />
				</div>
			</header>
<?php endif; ?>
		
			<div class="row">
			 	<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand" href="#">Navbar</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
						  <?php wp_nav_menu( array(
								'theme_location' => 'main', // Defined when registering the menu
								'menu_id'        => 'primary-menu',
								'container'      => false,
								'depth'          => 2,
								'menu_class'     => 'navbar-nav',
								'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
								'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
							) );
						  ?>
					  </div>
					</nav>
				</div>
			</div>
		
		
	

