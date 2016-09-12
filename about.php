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
    <p>The Swallow Hill Condominiums Home Owner Association ...</p>
    <p>The Swallow Hill HOA board consists of 5 members each serving 3 year terms.  Terms are offset so that no more than two board members are up for re-election in any given year.  This provides continuity from year to year and helps to ensure unbroken support for the Swallow Hill condominium community. </p>
    
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 about-block">
        <h2>Current HOA Board Members</h2>
        <ul>
          <li>David Ford, Board President</li> 
          <li>Nick Essner, Board Member</li>
          <li>Arlin Raedeke, Interim Treasurer</li>
          <li>Andrea Jones, Board Secretary</li>
          <li>Jon Weers, Interim Board Member</li>
        </ul>

        <h2>Design Committee</h2>
        <p>Special thanks to Swallow Hill design committee for organizing the upcoming redesign of our interior hallways!</p>
        <ul>
          <li>Sandy Peletier</li>
          <li>Sonja Ferdows</li>
          <li>Nick Essner</li>
          <li>Debbie Neff</li>
        </ul>
      </div>
    
    </div>
  </main>

  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
