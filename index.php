<?php part( 'header' ); ?>

<?php foreach ( array( 'navigation', 'content', 'lists', 'forms' ) as $name ) : ?>
	
	<h2><?php echo ucfirst( $name )?></h2>
	
	<?php part( 'dummy', $name ); ?>

<?php endforeach; ?>

<?php part( 'footer' ); ?>