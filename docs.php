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
    <p>Don't see what you are looking for? <a href="mailto:<?php echo Settings::contactEmailAddr; ?>">Contact us</a>.</p>
    
    <div class="row card-board">
      
      <div class="col-md-3 col-sm-5 white-card">
        <a href="files/rules-and-regulations.pdf" target="_blank">
          <h4>Rules and Regulations<i class="fa fa-file-pdf-o pull-right"></i></h4>
          <p class="small">The latest rules and regulations for Swallow Hill Condominium residents.</p>
          <span class="small label label-default">pdf</span>
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
      
      <div class="col-md-3 col-sm-5 white-card">
        <a href="files/new-resident-brochure.pdf" target="_blank">
          <h4>New Residents' Brochure<i class="fa fa-file-pdf-o pull-right"></i></h4>
          <p class="small">A tri-fold brochure filled with valuable information for new owners.</p>
          <span class="small label label-default">pdf</span>
          <span class="sr-only">click to download</span>
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
      
      <div class="col-md-3 col-sm-5 white-card">
        <a href="files/moving-and-delivery.pdf" target="_blank">
          <h4>Moving and Deliveries<i class="fa fa-file-pdf-o pull-right"></i></h4>
          <p class="small">Explanation of the fee for moving and the procedures for accepting large deliveries.</p>
          <span class="small label label-default">pdf</span>
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
      
      <div class="col-md-3 col-sm-5 white-card">
        <a href="files/SH-declaration.pdf" target="_blank">
          <h4>Condominium Declartion<i class="fa fa-file-pdf-o pull-right"></i></h4>
          <p class="small">The condominium delcaration for Swallow Hill, including amendments.</p>
          <span class="small label label-default">pdf</span>
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
      
      <div class="col-md-3 col-sm-5 white-card">
        <a href="files/SH-articles.pdf" target="_blank">
          <h4>Articles of Incorporation<i class="fa fa-file-pdf-o pull-right"></i></h4>
          <p class="small">The Articles of Incoporation for Swallow Hill Condominium Association, Inc.</p>
          <span class="small label label-default">pdf</span>
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
      
      <div class="col-md-3 col-sm-5 white-card">
        <a href="files/Newsletter.docx" target="_blank">
          <h4>Swallow Hill Newletter<i class="fa fa-file-word-o pull-right"></i></h4>
          <p class="small">The latest edition of the quarterly Swallow Hill Condominiums newsletter.</p>
          <span class="small label label-info">docx</span>
          <i class="fa fa-download file-download-icon" title="download"></i>
        </a>
      </div>
    
    </div>
  
  </main>
  
  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
