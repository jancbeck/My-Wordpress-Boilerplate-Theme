<?php get_header(); ?>

<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>	

   		<h1><?php the_title(); ?></h1>
   		<?php the_content();?>
   
   <?php endwhile; ?>
 <?php endif; ?>

 <?php wp_nav_menu(array(
	'theme_location' => 'main-nav'
)); ?>

<?php get_footer(); ?>