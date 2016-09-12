<?php
  /* 
   * Boots the necessary settings and classes for each page load.
   * Note:  The order in which these are loaded is very important!
   */
  
  //Must be first.
  require_once 'assets/localSettings.php';
  
  //Declate Default Timezone (production servers use UTC)
  date_default_timezone_set(Settings::timezone);
  
  //Initiate Logger ?
  if (Settings::enableLocalLogging){
    require_once 'classes/Logger.php';
    $logger = new Logger();
  }
  
  //Load Common Functions
  require_once 'assets/common.php';
  
  //User Authentication
  #require_once 'classes/Auth.php';
  #Auth::userIsLoggedIn();
  
  //Initiate Database
  #require_once "classes/Database.php";
  #$db = Database::obtain(Settings::dbName, Settings::dbHost, Settings::dbUser, Settings::dbPass, Settings::dbPort);
?>
