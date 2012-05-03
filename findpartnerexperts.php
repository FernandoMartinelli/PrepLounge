<?php

include_once('config/mysql-config.php');

include('includes/global-functions.inc.php');

$pageid=$_GET[pageid];

$CurrentPage = 'howitworks';

$partnersall = 'All areas of interest';

if($pageid!=null){

    switch($pageid){

       

        case '1':

        $partnersall = 'Management Consulting';

        $topicid=1;

        break;

        case '2': 

        $partnersall = 'Finance Consulting';

        $topicid=2;

        break;

        case '3':

        $partnersall = 'Career Planning';

        $topicid=3;

        break;

        case '4':

        $partnersall = 'MBA Schools';

        $topicid=4;

        break;

        case '5':

        $partnersall = 'University Admission';

        $topicid=5;

        break;

        case '6':

        $partnersall = 'Startup and Fundraising';

        $topicid=6;

        break;

        default:

        $partnersall = 'All areas of interest';

        

    }

    }

    

    

    

if(!empty($userdata))

{

 $useremailid= $userdata['user_emailid'];

 $query="select * from $TABLE_USER where user_emailid= '$useremailid'";

 $userdetails=mysql_query($query);

 $userdetailsfetch=@mysql_fetch_object($userdetails);

 $_SESSION['USERINFO']=$userdetailsfetch;

}



else{

$id=$_SESSION[USERINFO][user_id];

$query="select * from $TABLE_USER where user_id= $id";

$userdetails=mysql_query($query);

$userdetailsfetch=@mysql_fetch_object($userdetails);

}

include('includes/header.php');

?>

<div class="bodytittle"><h1 style="width: 960px;margin:0 auto;border-bottom: 0;padding: 0;" class="bodytittle" align="left">How it works</h1></div>



<div class="contentcenter">



<div class="re_bodyleft" style="width: 220px;">

<ul class="re_subtopics">

 <li style="width: 170px;"><a href="choosetopic.php">1. Choose a topic</a> </li>

 <li style="width: 170px;background-position: 158px center;" class="subtopicsactive"><a href="findpartnerexperts.php">2. Find partners or experts</a> </li>

 <li style="width: 170px;"><a href="meetus.php">3. Meet up!</a></li>

 <li style="width: 170px;"><a href="workonfeedback.php">4. Work on feedback</a></li>

 </ul>

 </div>

  

 

 <div class="re_bodyleft" style="width: 500px;padding-right: 20px;">

 <div class="bodytittle1" style="line-height: 27px;">2. Find partners or experts that fit your goals and needs</div>

 <div style="float:left;padding:18px 0;font-size: 13px;color:#333333;">

    On PrepLounge you will find hundreds of candidates looking for partners to exchange and prepare for interviews. If you want more professional advice and feedback, our experienced experts are there for you. 



<p style="margin-top: 10px;">

After choosing a topic of interest, look for either experts or other candidates, sorting and filtering them by education, experience, current status, interests etc.      

 </div>

 <div style="float: left;">

 <img src="images/findexpertbi1.jpg" border="0"/>

  </div>

  <div style="float:left;padding:18px 0;font-size: 13px; font-weight:normal;color:#333333;width: 100%;text-align: right;">

<a href="meetus.php"><img src="images/meetusbutton1.jpg" border="0"/></a></p>

  </div>

 </div>

 

<div class="re_bodyleft" style="width: 204px;background-color: #f8f8f8;padding:8px;text-align: center;">

<div style="padding-bottom: 13px;">

<img src="images/expertpic.jpg" border="0"/><br />

<label class="bodytittle1" style="font-size: 14px;">Placeholder</label></div>

 </div>

 

 </div>

 

 <?

 include('includes/footer.php');

 ?>