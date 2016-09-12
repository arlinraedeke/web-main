<?php
  /**
   * Instantiated by main.js and the sh_footer.php anywhere a "Subscribe" or "Sign Up for Emails" link occurs
   */
?>
<!-- Register Email Modal -->
<div id="registerEmailModal" class="modal fade" role="dialog" aria-labelledby="registerEmailHeader" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="registerEmailHeader" class="modal-title">Subscribe to the community newsletter</h3>
      </div>
      <div class="modal-body">
        <form id="registerEmailForm" class="form-horizontal" onsubmit="registerEmail()">
          <p>Please provide your email address to receive the latest Swallow Hill news.</p>
          <div class="form-group">
            <label class="control-label col-md-2" for="subscriberEmail">Email</label>
            <div class="col-md-8">
              <input type="email" class="form-control" value="" name="subscriberEmail" id="subscriberEmail" required pattern="^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$" data-error-msg="You must provide a valid email address.">
              <span class="help-block"></span>
            </div>
          </div>
        </form>
      </div>
      <div class="alert alert-success alert-dissmissable" id="registerEmailAlert" style="display:none; margin-bottom:0;">
        <span></span>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" id="registerEmailBtn" onclick="registerEmail()" data-loading-text="Subscribing...">Subscribe</button>
      </div>
    </div>
  </div>
</div>
