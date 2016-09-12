<?php
  //Initialize Key Classes
  require_once 'assets/boot.php';
  //Render the Header
  $PAGETITLE = Settings::pageTitle;
  $META_KEYWORDS = Settings::metaKeywords;
  $META_DESCRIPTION = Settings::metaDescription;
  require_once 'templates/sh_header.php';
   
?>
  <main>
  
    <h1 id="page-title" class="title">What's Happening?</h1>
    
    <?php
    
      $events = getEvents();
      
      foreach ($events as $event){
        echo '<div class="eventItem">'."\n";
        echo '  <a href="#'.$event['name'].'" name="'.$event['name'].'" class="event-date deep-anchor lead">'.$event['date'].'</a>'."\n";
        echo '  <div class="event-body row">'."\n";
        if (isset($event['img'])){
          echo '     <img class="event-photo col-lg-8 col-sm-12 col-xs-12" src="assets/img/'.$event['img'].'" >'."\n";
        }
        echo '     <p class="col-lg-8 col-sm-12 col-xs-12">'.$event['body']."</p>\n";
        echo '   </div>'."\n";
        echo '</div>'."\n";
      }
    ?>
        
  </main>
<?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
