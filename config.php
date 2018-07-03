<?php
ini_set( "display_errors", true );
define( "DB_HOST", "localhost" );
define( "DB_USERNAME", "username" );
define( "DB_PASSWORD", "password" );
define("DB_NAME","wgcms")
define( "CONTROL_PATH", "op-control" );
define( "CONTENT_PATH", "op-content" );
define("CORE_PATH","op-core");
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );
require( CLASS_PATH . "/Category.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
