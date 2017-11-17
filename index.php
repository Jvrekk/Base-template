<?php get_header(); ?>

<?php if(have_posts()):
	while(have_posts()): the_post(); 
		get_template_part('post',get_post_format());
		
	 endwhile;
endif; ?>

<?php get_footer(); ?>