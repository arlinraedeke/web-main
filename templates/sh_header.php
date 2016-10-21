<?php
/* HTML header file.  Sets default page meta, builds HTML header, and nav
 * @author Jon Weers
 * @param $PAGETITLE
 * @param $META_KEYWORDS
 * @param $META_DESCRIPTION
 * @uses common.php
 * @uses boot.php
 */

  if (!isset($PAGETITLE)){
    $PAGETITLE = Settings::pageTitle;
  }
  if (!isset($META_KEYWORDS)){
    $META_KEYWORDS = Settings::metaKeywords;
  }
  if (!isset($META_DESCRIPTION)){
    $META_DESCRIPTION = Settings::metaDescription;
  }
  
  /**
   * Sets the appropriate bootstrap class for the active page
   * @uses common.php getCurrentPage()
   * @param string $page
   * @return html str
   */
  function activeIfCurrent($page){
    $html = '';
    $currentPage = getCurrentPage();
    if (($currentPage == 'home' && $page == 'index') ||
        (strtolower($currentPage) == $page)){
      $html = 'active';
    }
    return $html;
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $PAGETITLE;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="Keywords" content="<?php echo $META_KEYWORDS;?>" />
    <meta name="Description" content="<?php echo $META_DESCRIPTION;?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">

    <link rel="shortcut icon" href="/favicon.ico" />

    <!-- Common CSS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  
    <!-- Polyfills --> 
    <!-- <script type="text/javascript" src="<?php echo getCurrentDir(); ?>/assets/js/polyfills/array.map.js"></script> -->
    
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo getCurrentDir(); ?>/assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo getCurrentDir(); ?>/assets/css/bootstrap-datepicker.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo getCurrentDir(); ?>/assets/css/jquery-ui-datepicker-bootstrap-custom.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo getCurrentDir(); ?>/assets/css/bootstrap-tagmanager.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo getCurrentDir(); ?>/assets/css/main.css" type="text/css" />
    
    <!-- jQuery -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="//en.openei.org/w/skins/openei/js/jquery/jquery.qtip-1.0.0-rc3.fixed.min.js"></script>

    <!-- Common JS -->
    <script type="text/javascript" src="<?php echo getCurrentDir(); ?>/assets/js/common.js"></script>

    <!-- App JS -->
    <script type="text/javascript" src="<?php echo getCurrentDir(); ?>/assets/js/main.js"></script>
    <script type="text/javascript" src="<?php echo getCurrentDir(); ?>/assets/js/bootstrap.js"></script>
    <!-- <script type="text/javascript" src="<?php echo getCurrentDir(); ?>/assets/js/bootstrap-datepicker.js"></script> -->
    <script type="text/javascript" src="<?php echo getCurrentDir(); ?>/assets/js/bootstrap-tagmanager.js"></script>

    <!-- Google Analytics -->
    <?php
      //Load Google Analytics if enabled in localSettings
      if (Settings::enableGoogleAnalytics):
    ?>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-86118964-1', 'auto');
      ga('send', 'pageview');
    </script>

    <?php
      endif; //end Google Analytics
    ?>
  </head>
  <body class="main-bkg">
    <header>
      <nav class="navbar navbar-default navbar-fixed sh-navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo getCurrentDir(); ?>/">Swallow Hill Condominiums HOA</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="navbarCollapse">
            <ul class="nav navbar-nav">
              <li class="<?php echo activeIfCurrent('index');?>"><a href="<?php echo getCurrentDir(); ?>/home">Home</a></li>
              <li class="<?php echo activeIfCurrent('about');?>"><a href="<?php echo getCurrentDir(); ?>/about">About the HOA</a></li>
              <li class="<?php echo activeIfCurrent('docs');?>"><a href="<?php echo getCurrentDir(); ?>/docs">Documents</a></li>
              <li class="<?php echo activeIfCurrent('faq');?>"><a href="<?php echo getCurrentDir(); ?>/faq">FAQ</a></li>
              <li class="<?php echo activeIfCurrent('contacts');?>"><a href="<?php echo getCurrentDir(); ?>/contacts">Contacts</a></li>
            </ul>
            <!--  No Search For Now 
            <form class="navbar-form navbar-left" role="search" action="<?php echo getCurrentDir(); ?>/search" method="get">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="sr-only">Search</span></button>    
                  </span>
                </div>
              </div>  
            </form> 
            -->
          </div><!-- end .navbar-collapse -->
        </div><!-- end .container-fluid -->
      </nav>
    </header>
    <div id="content">
      <a name="top" id="top"></a>
      <!-- start content -->

