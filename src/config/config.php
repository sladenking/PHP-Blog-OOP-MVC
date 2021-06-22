<?php


//---------------------------------------------------------
//Debug ?

define('DEBUG_MODE', false);

//---------------------------------------------------------

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');

define('DB_NAME', 'blog-mvc');
define('DB_USER', 'root');
define('DB_PASS', 'root');

//---------------------------------------------------------

define('URL', '/');

//---------------------------------------------------------

define('MAXIMUM_LOGINS', 3);

//---------------------------------------------------------

// Set values for Pagination 
define('ACTIVE_PAGE', 0);
define('CARDS_PER_PAGE', 6);

//---------------------------------------------------------


define('SITENAME', 'Блох');

//---------------------------------------------------------

define('DEFAULT_IMG', URL . 'public/img/default.jpg');

//---------------------------------------------------------

define('IMAGE_UPLOADS_PATH', 'uploads/images');
define('IMAGE_DEFAULT_EXT', '.jpg');
define('IMAGE_THUMB_EXT', '-thumb');
define('IMAGE_THUMB_WIDTH', 200);
define('IMAGE_THUMB_HEIGHT', 200);