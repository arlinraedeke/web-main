/**
 * Main JS
 */

/* Document Ready */
$(document).ready(function(){
  
  //Initialize All 2x Images (for high-rez devices)
  if(window.devicePixelRatio >= 1.7) {
    $('img.have2x').each(function(){
      var oldSrc = this.src;
      var parts = oldSrc.split('.');
      var ext = parts.pop();
      var newSrc = parts.join('.') + '@2x.' + ext;
      $(this).attr('src',newSrc);
    });
  }
  
});

function showAlert(alert, msg){
  $(alert+' span').html(msg).parent().fadeIn(200);
}

function hideAlert(alert){
  $(alert).fadeOut(250, function(){
    $(this).find('span').empty();
  });
}

function showFormError(errMsg){
  var $err = $('.formContainer:visible .formError');
  if ($err.length <= 0){
    return false;
  }
  $err.stop()
    .css({backgroundColor:"#f3f383"})
    .html('Error: '+errMsg)
    .animate({backgroundColor: "#f3f3f3"},300);
  return true;
}

function registerEmail(){
  //Prevent double submit
  $('#registerEmailBtn').button('loading');
  
  var $input = $('#subscriberEmail');
  var email = $input.val();
  var showErrorMsg = function(msg){
    $input.focus().next('.help-block').text(msg || $input.data('errorMsg'))
      .parents('.form-group').addClass('has-error');
    $('#registerEmailBtn').button('reset');
  };
  if (email.length == 0){ 
    showErrorMsg();
    return false;
  }
  var pattern = new RegExp($input[0].pattern);
  if (email.match(pattern) == null){
    showErrorMsg();
    return false;
  }
  
  //mailto Dawnette instead of saving to db?
  var data = {
      action: 'registerEmail',
      format: 'json',
      email: email
    };
  
  $.ajax({
    url: 'api', 
    type:"POST",
    dataType: 'json',
    data: data,
    success: function(response){
      //Process server-side errors
      if (response.error){
        showErrorMsg('Error: ' + response.error);
        return;
      }
      if (!response.result){
        showErrorMsg('Something went wrong! Unable to save email.');
        return;
      }

      //Success!
      $('#registerEmailBtn').text('Subscribed').prev().text('Close');
      showAlert('#registerEmailAlert', "<strong>Success!</strong> You're all signed up.");
    }
  });
  
}
