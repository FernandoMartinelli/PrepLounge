<?php
require 'lib/db.php';
require 'lib/facebook.php';
require 'lib/fbconfig.php';

// test one again!

$user = $facebook->getUser();
if ($user)
{
$logoutUrl = $facebook->getLogoutUrl();
try
{
$userdata = $facebook->api('/me');
}
catch (FacebookApiException $e) {
error_log($e);
$user = null;
}
$_SESSION['facebook']=$_SESSION;
$_SESSION['userdata'] = $userdata;
$_SESSION['logout'] = $logoutUrl;
//Redirecting to home.php
header("Location: http://mycityfinder.com/PrepLounge/mydetails.php");
//header("Location: http://mycityfinder.com/PrepLounge/home.php");
}
else
{
$loginUrl = $facebook->getLoginUrl(array(
 'scope' => 'email,user_birthday'
));

echo '<a href="'.$loginUrl.'">Login with Facebook</a>';
//header("Location:'$loginUrl'"); 
}
?>
<!--
<html>
<head>
<script type="text/javascript">
function load()
{
window.location = "https://www.facebook.com/dialog/oauth?client_id=152809048155940&redirect_uri=http%3A%2F%2Fmycityfinder.com%2FPrepLounge%2Fmydetails.php&state=c061eb666379e067598913f7276a972f&scope=email%2Cuser_birthday"
}
</script>
</head>

<body onload="load()">
</body>
</html> 
--!>