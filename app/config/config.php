<?php
  $appRoot = 'APPROOT';
  $urlRoot = 'URLROOT';
  $siteName = 'SITENAME';

  //DB Params 
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', 'root');
  define('DB_NAME', 'mfwork');
  //app root
  define($appRoot, dirname( dirname(__FILE__) ) );

  //url root
  define($urlRoot , 'http://localhost/myframework');

  //site name
  define($siteName , 'My Framework');
