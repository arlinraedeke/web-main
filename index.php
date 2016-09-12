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
<div class="row home-page-sections responsive-hide">
  <div class="col-md-6 col-sm-3"></div>
  <div class="col-md-6 col-sm-9">
    <div id="quote">Premier Denver residences conveniently located on a quiet street in the heart of Uptown.</div>
  </div>
</div>

<div class="row home-page-sections">
  <div class="col-md-5 home-page-section">
  
    <div class="gray-box">
      <h3>Community</h3>
      
      <a class="community-title" href="files/rules-and-regulations.pdf">Rules and Regulations</a>
      <p>Download the latest <a href="files/rules-and-regulations.pdf" target="_blank">HOA rules and regulations</a>.</p>
      
      <a class="community-title" href="blog#changetheworld">Historic walking tours</a>
      <p>Join Arlin and your neighbors for a historic tour of the Uptown neighborhood full of interesting stories and colorful characters in Colorado's past!</p>
      
      <a class="community-title" href="http://uptowndenver.org/">Uptown on the Hill</a>
      <p>This neighborhood association combines the energy and enthusiasm of residents and local businesses to build and maintain a vibrant and friendly Denver neighborhood.</p>
      
      <!-- <p class="read-more"><a href="community">Read more</a></p>  -->
      
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
  
  <div class="col-md-7 home-page-section">

    <div class="gray-box translucent">
      <h3>What's Happening</h3>
      <?php 
        include 'content/events.html';
      ?>
      <a class="btn btn-default pull-right" href="mailto:dawnette@marketstreetmanagement.com?subject=Swallow Hill Newsletter&body=Hi Dawnette,%0D%0DPlease sign me up for the Swallow Hill Newsletter.%0D%0DThank you,">Sign up for the newsletter</a>
      <!-- <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#registerEmailModal">Sign up for the newsletter</button>  -->
      <div class="clearfix">&nbsp;</div>
    </div>

  

    
</div>

<!-- end Responsive Content Sections -->

  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
