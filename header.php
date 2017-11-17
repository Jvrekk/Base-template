<html>
	<head>
		<meta charset="UTF-8">
		<title>Moje portfolio</title>
		<?php wp_head() ?>
	</head>
	
<?php if(is_front_page()):
	$body_theme_classes = array('frontPage');
else:
	$body_theme_classes = array('otherPage');
endif; ?>
	
	<body <?php body_class($body_theme_classes); ?> ></body>
		<header>
<?php if( get_header_image()): ?>
			<img class="header-image" src="<?php header_image(); ?>" width="100%" />
<?php endif; ?>
		</header>
		<?php wp_nav_menu(); ?>

