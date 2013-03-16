<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines
*/

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'mysql' );
define( 'DB_HOST', 'localhost' ); 

// =================================================================
// Debug mode
// =================================================================
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
