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
    <a href="home" class="close"><span aria-hidden="true">&times;</span></a>
    
    <h1>HOA Documents</h1>
    <p>Don't see what you need? <a href="mailto:<?php echo Settings::contactEmailAddr; ?>">Contact us</a>.</p>
    
    <ul>
      <li><i class="fa fa-file-pdf-o"></i> <a href="files/rules-and-regulations.pdf" target="_blank">Rules and Regs</a></li>
      <li>More coming soon..</li>
    </ul>
  
  </main>

  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
