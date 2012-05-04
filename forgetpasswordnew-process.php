<?php

// comment aaaa

// comment online

include_once('config/mysql-config.php');

include('includes/global-functions.inc.php');

$returnPage="forgetpassword-new.php";

$email=$_POST[user_emailid];

$emaildetails=mysql_query("SELECT * FROM $TABLE_USER where user_emailid='$email'");

$rows=mysql_fetch_row($emaildetails);

$emailinfo=mysql_fetch_object($emaildetails);

$useremail=$emailinfo['user_emailid'];

if($rows>0){

  

$chars = "abcdefghijklmnopqrstuvwxyz0123456789";

        $len = strlen($chars);

        mt_srand((double)microtime() * 1000000);

        for ($i = 0; $i < 7; $i++) {

            $randomize = mt_rand(0, $len);

            $imagename .= $chars{$randomize};

        }

     $passwordstring=$imagename;

     $passwordfordatabase=md5($passwordstring);   

     $updatequery = "UPDATE $TABLE_USER SET password='$passwordfordatabase'WHERE user_emailid='$email'";

     mysql_query($updatequery);      

     $message='<H2>Dear User,</H2><br><br>

	As requested, here is your password for PrepLounge:<br><br>

    user.password:<b>'.$passwordstring.'</b>

	<a href="'.$svr_urlscript.'/user-activation.php?id='.$user_id.'&Activation='.$activation_code.'" target="_blank"> CLICK HERE TO ACTIVATE YOUR MEMBERSHIP</a><br><br>OR copy paste this url to your web browser: <br>'.$svr_urlscript.'/user-activation.php?id='.$user_id.'&Activation='.$activation_code.'<br><br>

    Don�t forget, you user name is your email. <a href="login.php"class="linkanew">Log in now!</a>

    



   Thank you,

  Your PrepLounge';

    $sendmail= HTMLemail("$email","$ADMIN_MAIL",'',"Welcome to PrepLounge!",$message);

    header("Location:$returnPage?passback=2012");

}





else{

    

    header("Location:$returnPage?err=1001");

    }

?>