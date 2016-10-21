<?php
  //Initialize Key Classes
  require_once 'assets/boot.php';
  //Render the Header
  $PAGETITLE = Settings::pageTitle;
  $META_KEYWORDS = Settings::metaKeywords;
  $META_DESCRIPTION = Settings::metaDescription;
  require_once 'templates/sh_header.php';
  
  // meeting schedule
  // board members
  // ??
  
?>
  <main>
    <a href="home" class="close"><span aria-hidden="true">&times;</span></a>
    
    <h1>About the HOA</h1>
    <p>The Swallow Hill Condominium Association, Inc. was incorporated in 2002 and is governed by a board that consists of 5 members, each serving 2 year terms.  The terms of service are offset so that no more than three board members are up for re-election in any given year.  This provides continuity from year to year and helps to ensure unbroken support for the Swallow Hill condominium community.</p>
    
    <div class="row">
      <div class="col-xs-12 col-lg-6 about-block">
       <?php 
         include 'content/about.html';
       ?>
      </div>    
    </div>
  </main>

  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
