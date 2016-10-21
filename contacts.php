<?php
  //Initialize Key Classes
  require_once 'assets/boot.php';
  //Render the Header
  $PAGETITLE = Settings::pageTitle;
  $META_KEYWORDS = Settings::metaKeywords;
  $META_DESCRIPTION = Settings::metaDescription;
  require_once 'templates/sh_header.php';
  
  //Dawnette at Market Street Management, David, Mathias Lock and Key?, someone at Jeld Wen, Rick Doris (property manager)
  
?>
  <main>
    <a href="home" class="close"><span aria-hidden="true">&times;</span></a>
    
    <h1 class="visible-md-block visible-lg-block">Contacts for Swallow Hill Condominiums</h1>
    <h1 class="hidden-md hidden-lg">Contacts</h1>
    <div class="row">
      <div class="col-lg-6 col-md-12 contact-block">
          <div class="col-sm-4 pic-frame">
              <img class="have2x staff-pic" src="assets/img/staff-pic-dawnette.jpg" alt="Photo of Dawnette">
          </div>
          <div class="col-sm-8 contact-info">
              <h3>Dawnette Vega</h3>
              <p class="lead">Community Conact, Market Street Management</p>
              <p><i class="fa fa-envelope-o"></i> <?php echo getSafeEmailLink('dawnette@marketstreetmanagement.com','Email Dawnette'); ?></p>
              <p><i class="fa fa-phone"></i> (303) 595-8710</p>
          </div>
          <div class="col-sm-12">
              <p>Dawnette serves as the Swallow Hill Condominium account manager at Market Street Management.
              She can help you with questions about HOA docs, dues, and moving.
              </p>
          </div>
      </div>
      <div class="col-lg-6 col-md-12 contact-block">
          <div class="col-sm-4 pic-frame">
              <img class="have2x staff-pic" src="assets/img/staff-pic-david.jpg" alt="Photo of David Ford">
          </div>
          <div class="col-sm-8 contact-info">
                  <h3>David Ford</h3>
                  <p class="lead">Swallow Hill Condominiums HOA Board President</p>
                  <p><i class="fa fa-envelope-o"></i> <?php echo getSafeEmailLink('president@swallowhillhoa.org', 'Email David'); ?></p>
                  <p><i class="fa fa-phone"></i> (303) ???</p>
              </div>
          <div class="col-sm-12">
              <p>David Ford has served as the Swallow Hill HOA Board president since <code>??</code>.
              He currently works at the <code>??</code> as is an active supporter of local neighborhood initiatives.
              </p>
          </div>
      </div>
      <div class="col-lg-6 col-md-12 contact-block">
          <div class="col-sm-4 pic-frame">
              <img class="have2x staff-pic" src="assets/img/staff-pic-david.jpg" alt="Photo of Rick Doris">
          </div>
          <div class="col-sm-8 contact-info">
                  <h3>Rick Doris</h3>
                  <p class="lead">Swallow Hill Condominiums Building Manager, Market Street Management</p>
                  <p><i class="fa fa-envelope-o"></i> <?php echo getSafeEmailLink('rick@marketstreetmanagement.com', 'Email Rick'); ?></p>
                  <p><i class="fa fa-phone"></i> (303) 595-8710</p>
              </div>
          <div class="col-sm-12">
              <p>Rick has been managing both the Swallow Hill Emerson and Clarkson buildings for over 13 years.
              He is well-versed in the technologies and building systems utilized by Swallow Hill and takes pride in making sure our buidings run efficiently. 
              </p>
          </div>
      </div>
    </div>
  </main>

  <?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
