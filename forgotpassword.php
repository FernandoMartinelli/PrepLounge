<?php
include_once('config/mysql-config.php');
include('includes/global-functions.inc.php');
include('includes/header.php');
$errormessage=$_GET[error];
$emailid=$_POST['email'];
if(isset($_SESSION[user_emailid]))
{
    $emailid=$_SESSION[user_emailid];
}

// changed line 12 online

if($errormessage=='E22115')
{
    $MessageIconPath="/images/error.jpg";
    $Message = 'E22115';
    $errormessages= MessagesBox($Message);  
}


// comment online to test

?>

<style type="text/css">
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
</style>
<script type="text/JavaScript">
$(document).ready(function() { 

	$('.signupbuttons1').click(function(e){
	
		// Declare the function variables:
		// Parent form, form URL, email regex and the error HTML
		var $formId = $(this).parents('form');
		var formAction = $formId.attr('action');
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var $error = $('<span class="error"></span>');

		// Prepare the form for validation - remove previous errors
		$('li',$formId).removeClass('error');
		$('span.error').remove();

		// Validate all inputs with the class "required"
		$('.required',$formId).each(function(){
			var inputVal = $(this).val();
			var $parentTag = $(this).parent();
			if(inputVal == ''){
				$parentTag.addClass('error').append($error.clone().text('Required Field'));
			}
			
			// Run the email validation using the regex for those input items also having class "email"
			if($(this).hasClass('email') == true){
				if(!emailReg.test(inputVal)){
					$parentTag.addClass('error').append($error.clone().text('Enter valid email'));
				}
			}
			
			// Check passwords match for inputs with class "password"
			if($(this).hasClass('password') == true){
				var password1 = $('#password-1').val();
				var password2 = $('#password-2').val();
				if(password1 != password2){
				$parentTag.addClass('error').append($error.clone().text('Passwords must match'));
				}
			}
		});

		// All validation complete - Check if any errors exist
		// If has errors
		if ($('span.error').length > 0) {
			
			$('span.error').each(function(){
				
				// Set the distance for the error animation
				var distance = 5;
				
				// Get the error dimensions
				var width = $(this).outerWidth();
				
				// Calculate starting position
				var start = width + distance;
				
				// Set the initial CSS
				$(this).show().css({
					display: 'block',
					opacity: 0,
					right: -start+'px'
				})
				// Animate the error message
				.animate({
					right: -width+'px',
					opacity: 1
				}, 'slow');
				
			});
		} else {
			$formId.submit();
		}
		// Prevent form submission
			e.preventDefault();
	});
	
	// Fade out error message when input field gains focus
	$('.required').focus(function(){
		var $parent = $(this).parent();
		$parent.removeClass('error');
		$('span.error',$parent).fadeOut();
	});
});
</script>
 
		<div id="content">
        <div id="message"style="MessageBoxText" ><? echo $errormessages;?></div>
<div class="form" style ="padding-top:25px">
<div class="formcenter">
<div class="reg2_fields mrgn_b10" style="min-height: 8px;">
<div class="label_txt" style="width: 245px; padding-bottom: 0px;padding-left: 47px;float:left;text-align: right;">Change your password</div>
                                </div>

          <form id="form-sign-up" class="styled" action="" method="post">
	  	    <fieldset>
			   
			    <li class="form-row"><label class="label_txt" style="width: 155px;"><cite>*</cite> Current Password:</label>
				  <input name="user_emailid" type="text" id="register-email" class="text-input required email" value="<? echo $emailid ?>" />
				</li>
				<li class="form-row"><label class="label_txt" style="width: 155px;"><cite>*</cite> New Password:</label>
				  <input name="password" type="password" id="password-1" class="text-input required password" />
				</li>
				<li class="form-row"><label class="label_txt" style="width: 155px;"><cite>*</cite> Repeat New Password:</label>
				  <input name="password" type="password" id="password-2" class="text-input required password" />
				</li>
				<li class="button-row" style="list-style: none;">
				  <input type="button" alt="Sign Up" value="Change Password" class="signupbuttons1" style="padding: 4px 8px 8px;"/>
				</li>
			  
			</fieldset>
		  </form></div>
</div><!-- form -->		</div>
<?
include('includes/footer.php');
?>