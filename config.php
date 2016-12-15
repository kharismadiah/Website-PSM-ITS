<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Jakarta" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "admin" );
require( CLASS_PATH . "/Article.php" );

/* Default e XAMPP mysql e gini 
username : "root" 
pass : "" -> kosong
db name -> kamu bikin dewe, case ini "cms" 
*/

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
