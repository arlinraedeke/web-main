<?php
  //Initialize Key Classes
  require_once 'assets/boot.php';
  //Render the Header
  $PAGETITLE = Settings::pageTitle . '- FAQ';
  $META_KEYWORDS = Settings::metaKeywords . 'FAQ';
  $META_DESCRIPTION = Settings::metaDescription;
  require_once 'templates/sh_header.php';

?>
  <main>
    <a href="home" class="close"><span aria-hidden="true">&times;</span></a>
  
    <h1 id="page-title" class="title">Frequently Asked Questions</h1>
    <p>If your question is not answered here, please <a href="mailto:<?php echo Settings::contactEmailAddr; ?>">contact us</a>.</p>
    
    <h2>HOA Dues</h2>
    <div class="faqItem">
      <a href="#dues" name="dues" class="faqQuestion deep-anchor lead">When are my monthly HOA dues due?</a>
      <div class="faqAnswer">
        <p>Monthly dues are due on the 1st of each month and must be received by the management company by the <code>xth</code> to avoid a late fee.</p>
      </div>
    </div>
    
    <div class="faqItem">
      <a href="#paymentoptions" name="paymentoptions" class="faqQuestion deep-anchor lead">How do I pay my HOA dues?</a>
      <div class="faqAnswer">
        <p>Market Street Management is currently processing payments for the Swallow Hill Condominium Home Owner Association.</p>
        <p>To pay by check, Please direct all HOA dues payments to:
          <address class="well">
            Swallow Hill Homeowner Assn<br>
            c/o Market Street Management<br>
            1600 Blake Street<br>
            Denver, CO 80202
          </address>
        </p>
        
      </div>
    </div>
    
    <div class="faqItem">
      <a href="#hoaincludes" name="hoaincludes" class="faqQuestion deep-anchor lead">What is included in the HOA dues?</a>
      <div class="faqAnswer">
        <p>Your HOA dues include water, sewer, trash, landscaping, and cleaning and maintenance of common areas including the garage, entry, and elevator.</a>.
        </p>
      </div>
    </div>
    
    <h2>Replacement Keys</h2>
    <div class="faqItem">
      <a href="#keys" name="keys" class="faqQuestion deep-anchor lead">How do I get replacement keys, fobs, or garage remotes?</a>
      <div class="faqAnswer">
        <p>Additional access devices can be obtained through Market Street Management.  If you are renting your unit, please coordinate the replacement through your owner.  Market Street Management must have the permission of the unit owner before they can distribute extra access devices.  Additional devices are subject to the charges below:<br>
        Keys - $10 each<br>
        Fobs - $20 each<br>
        Garage Remotes - $50 each<br>
        </p>
      </div>
    </div>
    
    <h2>Rules and Regs</h2>

    
    <div class="faqItem">
      <a href="#moving" name="moving" class="faqQuestion deep-anchor lead">What are the procedures for moving?</a>
      <div class="faqAnswer">
        <p>Need answer here.</p>
      </div>
    </div>
    
    <div class="faqItem">
      <a href="#grill" name="grill" class="faqQuestion deep-anchor lead">Can I have a grill on my patio or balcony?</a>
      <div class="faqAnswer">
        <p>Need answer here.</p>
      </div>
    </div>
    
    <div class="faqFooter">
      <p>If you have additional questions, please <a href="mailto:<?php echo Settings::outgoingEmailAddr; ?>">contact us</a>.</p>
    </div>
  </main>
<?php
  //Render the Footer
  include_once 'templates/sh_footer.php';
?>
