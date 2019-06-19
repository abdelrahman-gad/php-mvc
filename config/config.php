<?php
//define globals to be used anywher in the framework

define('DB_NAME','mvc'); //DB name
define('DB_USER','root'); //DB user name
define('DB_PASSWORD','');//DB password
define('DB_HOST','127.0.0.1');//use IP address to avoid DNS look up 

define('DEBUG',true);

define('DEFAULT_CONTROLLER','Home');// constant default controller if it is not defined by the url

define('DEFAULT_LAYOUT','default');//if no out is set layout in the controller use this laout
define('PROOT','/MVC/');//in live server use '/'

define('SITE_TITLE','Abdurrahman gad MVC framework'); //this will be used if no site_title is set





// define users sessions/cookies constants

define('CURRENT_USER_SESSION_NAME','uifhfuibvDFsnhusnSnvjusn'); //session name for logged in user
define('REMEMBER_ME_COOKIE_NAME','jvbaDFGnsSnfmSvnijuaivghvna');//cookie name for logged in user

define('REMEMBER_ME_COOKIE_EXPIRY',604800);//expiry duration for remeber me the cookie[3 days]



