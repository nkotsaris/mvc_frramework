<?php
  $appRoot = 'APPROOT';
  $urlRoot = 'URLROOT';
  $siteName = 'SITENAME';

  //DB Params 
  define('DB_HOST', 'localhost');
  define('DB_USER', 'dbuser');
  define('DB_PASS', 'dbpass');
  define('DB_NAME', 'dbname');
  //app root
  define($appRoot, dirname( dirname(__FILE__) ) );

  //url root
  define($urlRoot , 'http://localhost/myframework');

  //site name
  define($siteName , 'My Framework');
