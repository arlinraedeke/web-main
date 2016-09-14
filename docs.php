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
    
    <div class="row card-board">
      
      <div class="col-md-3 white-card">
        <a href="files/rules-and-regulations.pdf" target="_blank">
          <h4>Rules and Regulations<i class="fa fa-file-pdf-o pull-right"></i></h4>
          <p class="small">The latest rules and regulations for Swallow Hill Condominium residents.</p>
          <span class="small label label-default">pdf</span>
          
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
      
      <div class="col-md-3 white-card">
        <a href="files/new-resident-brochure.pdf" target="_blank">
          <h4>New Residents' Brochure<i class="fa fa-file-pdf-o pull-right"></i></h4>
          <p class="small">A tri-fold brochure filled with valuable information for new owners.</p>
          <span class="small label label-default">pdf</span>
          <span class="sr-only">click to download</span>
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
    
    </div>
  
  </main>

    


  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
