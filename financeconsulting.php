<?php

// testing =) again

//g hahaha

include_once('config/mysql-config.php');

include('includes/global-functions.inc.php');

$pageid=$_GET[pageid];

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

 $userdetailsfetch=mysql_fetch_object($userdetails);

 $_SESSION['USERINFO']=$userdetailsfetch;

}



else{

$id=$_SESSION[USERINFO][user_id];

$query="select * from $TABLE_USER where user_id= $id";

$userdetails=mysql_query($query);

$userdetailsfetch=mysql_fetch_object($userdetails);

}

include('includes/header.php');

?>

<div class="bodytittle"><h1 style="width: 960px;margin:0 auto;border-bottom: 0;padding: 0;" class="bodytittle">Topics</h1></div>

<div class="contentcenter">



<div class="re_bodyleft" style="width: 220px;">

<ul class="re_subtopics">

<li style="width: 170px;"><a href="topics.php">All areas</a> </li>

 <li style="width: 170px;"><a href="managementconsulting.php">Management Consulting</a> </li>

 <li style="width: 170px;" class="subtopicsactive"><a href="financeconsulting.php">Finance Consulting</a></li>

 <li style="width: 170px;"><a href="careerplanning.php">Career Planning</a></li>

 <li style="width: 170px;"><a href="mbaschools.php">MBA Schools</a></li>

 <li style="width: 170px;"><a href="universityadmission.php">University Admission</a> </li>

 <li style="width: 170px;"><a href="startupfundraising.php">Startup and Fundraising</a></li>

 </ul>

 </div>

 

 

  

 

 <div class="re_bodyleft" style="width: 500px;padding-right: 20px;">

 <div class="bodytittle1" style="line-height: 27px;">Finance Consulting</div>

 <div style="float:left;padding:18px 0;font-size: 12px; font-weight:bold;color:#333333;">

   PrepLounges Mission ist klar: euch, Bewerbern, zu helfen, eure Traumkarriere zu erreichen. Dabei helfen wir euch in vershiedenen Arten. Bla bla bla      

 </div>

 <div style="float: left;">

PrepLounges Mission ist klar: euch, Bewerbern, zu helfen, eure Traumkarriere zu erreichen. Dabei helfen wir euch in vershiedenen Arten. Bla bla bla 

  </div>

 </div>

 

<div class="re_bodyleft" style="width: 204px;background-color: #f8f8f8;padding:8px;">

<div style="padding-bottom: 13px;">

<img src="images/expertpic.jpg"/><br />

<label class="bodytittle1" style="font-size: 14px;">Are you an expert?</label></div>

<div style="font-weight: normal;">You want to help others with your experience and get laid every night? That's cool! We're looking for you! </div>

<div style="margin-top: 20px;"><img src="images/getintouch1.jpg"/></div>

 </div>

 

 </div>

 

 <?

 include('includes/footer.php');

 ?>