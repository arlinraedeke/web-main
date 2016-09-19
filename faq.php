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
        <p>Monthly dues are due on the 1st of each month.</p>
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
        <p>Your HOA dues include gas (including unit gas), water, sewer, trash, landscaping, cleaning and maintenance of common areas including the garage, entry, and elevator.  The dues also cover repairs and maintenance of major buildings systems including common plumbing, electrical, HVAC, and mechanical systems; contract services such as landscaping, trash removal, elevator maintenance and snow removal; administrative services including accounting, legal, and audit services; property insurance; and capital reserves.</p>
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
        <p>Moving in and out of units requires that the owner of the unit provide notice to Market Street Management at least 24 hours in advance of the move.<br> 
          Every move into the building <strong>requires a $200 move-in fee</strong>, which will be billed to the unit owner.  Once notification of a move is received, the management company will place padding in the freight elevator and provide you with a way to stop the elevator to make your move easier.<br>  
          All moves must be done using the back alley entrances, rather than the front doors.  Please help us keep up appearances by not hauling goods through the front entryways.
        </p>
      </div>
    </div>
    
    <div class="faqItem">
      <a href="#grill" name="grill" class="faqQuestion deep-anchor lead">Can I have a grill on my patio or balcony?</a>
      <div class="faqAnswer">
        <p>From <strong>Denver Fire Code-Section 308.1.4 - OPEN FLAME DEVICES</strong>:
           <br>No gas-fired grills, charcoal grills or other similar devices used for cooking, heating, or any other purpose,
               shall be used or kindled on any balcony or under any overhanging portion or within 10 feet (3 m) of any structure.
        </p>
      </div>
    </div>
    
    <div class="faqItem">
      <a href="#quiet" name="quiet" class="faqQuestion deep-anchor lead">What are the quiet hours?</a>
      <div class="faqAnswer">
        <p>Your fellow residents at Swallow Hill kindly ask that you respect the quiet hours between 10:00pm and 8:00am Sunday through Thursday, and 11:00pm through 8:00am on Friday and Saturday. 
        </p>
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
