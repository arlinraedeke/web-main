<?php
  //Initialize Key Classes
  require_once 'assets/boot.php';
  //Render the Header
  $PAGETITLE = Settings::pageTitle;
  $META_KEYWORDS = Settings::metaKeywords;
  $META_DESCRIPTION = Settings::metaDescription;
  require_once 'templates/sh_header.php';
?>
<!-- Responsive Content Sections -->
<div class="row home-page-sections hidden-xs">
  <div class="col-md-6 col-sm-3"></div>
  <div class="col-md-6 col-sm-9">
    <div id="quote">Premier Denver residences conveniently located on a quiet street in the heart of Uptown.</div>
  </div>
</div>

<div class="row home-page-sections">
  
  <div class="col-md-7 col-md-push-5 home-page-section">

    <div class="gray-box translucent">
      <h3>What's Happening</h3>
      <div class="events">
        <?php 
          include 'content/events.html';
        ?>
      </div>
      <a class="btn btn-default pull-right" href="mailto:dawnette@marketstreetmanagement.com?subject=Swallow Hill Newsletter&body=Hi Dawnette,%0D%0DPlease sign me up for the Swallow Hill Newsletter.%0D%0DThank you,">Sign up for the newsletter</a>
      <!-- <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#registerEmailModal">Sign up for the newsletter</button>  -->
      <div class="clearfix">&nbsp;</div>
    </div>
    
  </div>
  
  <div class="col-md-5 col-md-pull-7 home-page-section">
  
    <div class="gray-box">
      <h3>Community</h3>
      <?php 
        include 'content/community.html';
      ?>
    </div>
  
  
    <div class="gray-box">
      <h3>Frequently Asked Questions</h3>
        <ul>
          <li><a href="faq#hoaincludes">What's included in the HOA dues?</a></li>
          <li><a href="faq#keys">How do I get replacement keys?</a></li>
          <li><a href="faq#moving">What are the procedures for moving?</a></li>
        </ul>
        <a href="faq">Read more</a>
    </div>
  </div>
  

    
</div>

<!-- end Responsive Content Sections -->

  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
