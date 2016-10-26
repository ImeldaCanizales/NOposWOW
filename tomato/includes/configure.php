<?php
  define('HTTP_SERVER', 'http://icanizalez.byethost15.com');
  define('HTTPS_SERVER', 'http://icanizalez.byethost15.com');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', 'icanizalez.byethost15.com');
  define('HTTPS_COOKIE_DOMAIN', 'icanizalez.byethost15.com');
  define('HTTP_COOKIE_PATH', '/tomato/');
  define('HTTPS_COOKIE_PATH', '/tomato/');
  define('DIR_WS_HTTP_CATALOG', '/tomato/');
  define('DIR_WS_HTTPS_CATALOG', '/tomato/');
  define('DIR_WS_IMAGES', 'images/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', '/home/vol5_6/byethost15.com/b15_18998003/htdocs/tomato/');
  define('DIR_FS_ADMIN', 'admin/');
  define('DIR_FS_WORK', '/home/vol5_6/byethost15.com/b15_18998003/htdocs/tomato/includes/work/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
  define('DIR_FS_BACKUP', '/home/vol5_6/byethost15.com/b15_18998003/htdocs/tomato/' . DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_CACHE', DIR_FS_CATALOG . 'cache/');
  define('DIR_FS_CACHE_ADMIN', DIR_FS_CACHE . DIR_FS_ADMIN);

  define('DB_SERVER', 'sql108.byethost15.com');
  define('DB_SERVER_USERNAME', 'b15_18998003');
  define('DB_SERVER_PASSWORD', 'Chelita14');
  define('DB_DATABASE', 'b15_18998003_tomato');
  define('DB_DATABASE_CLASS', 'mysql');
  define('DB_TABLE_PREFIX', 'toc_');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
?>