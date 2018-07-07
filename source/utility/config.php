<?php
   if(!defined('DB_SERVER')) define('DB_SERVER', 'localhost:3306');
   if(!defined('DB_USERNAME')) define('DB_USERNAME', 'root');
   if(!defined('DB_PASSWORD')) define('DB_PASSWORD', '');
   if(!defined('DB_DATABASE')) define('DB_DATABASE', 'sdi1400173');
   $db = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>