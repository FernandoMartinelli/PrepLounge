<?phpinclude_once('config/mysql-config.php');include('includes/global-functions.inc.php');include('includes/header.php');?><?if($_GET[passback]=='2012'){?><script>alert('New password is send to your email');</script><?}?><div id="content"><div class="form" style ="padding-top:25px"><div class="formcenter" style=" width: 750px;"><div class="reg2_fields mrgn_b10"><?if($_GET[err]=='1001'){echo '<div align="center" class="MessageBoxText" style="color: black; width: 95%; margin-top: 10px; margin-left: 10px"><label style="text-align: center;">Given User Is Not Valid</label></div>';}if($_GET[passback]==''){ echo '<div align="center" class="completedregister" style="color: black; width: 95%; margin-top: 10px; margin-left: 10px;  margin-right:10px;"><a href="login.php" class="linkanew">Please type your email address below and you will receive your password per Email</a></div>';   }else{    echo '<div align="center" class="completedregister" style="color: black; width: 95%; margin-top: 10px; margin-left: 10px; margin-right:10px;">New password is send to your email</div>';}?></div> <form id="form-sign-up" class="styled" method="post" action="forgetpasswordnew-process.php" style="padding-top: 0;">                      <fieldset>			    				<li class="form-row" style="width: 600px;"><label class="label_txt" style="width: 230px;">Enter Your Usernaame or Email ID:</label>				  <input name="user_emailid" type="text" id="password" class="text-input required email"/>				</li>	                                <li class="button-row" style="list-style: none;padding-top: 14px;padding-left: 61px; width: 445px;">               <input type="submit" value="Send me my password" class="signupbuttons4" style="padding: 4px 0px 8px;"/>                             </li>                </fieldset></form></div></div></div><?include('includes/footer.php');?>