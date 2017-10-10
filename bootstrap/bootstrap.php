<?php 
//define constanc for directories
define('SYSTEM_DIR', __DIR__ .'/..'); //system directory

//define public directory
define('PUBLIC_DIR', SYSTEM_DIR . '/public');
define('VENDOR_DIR', SYSTEM_DIR . '/vendor'); //vendor directory

//require_one all necessary libraries
require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php';
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php';




