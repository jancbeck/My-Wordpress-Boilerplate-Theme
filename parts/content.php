<h1><?php bloginfo( 'name' ) ?></h1>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php the_title(); ?>
		<?php the_content(); ?>

	<?php endwhile; ?>
<?php endif; ?>