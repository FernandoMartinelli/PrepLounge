<?php 

// testing findsub

include_once('config/mysql-config.php');
$topic=$_GET[topic];
$query="select * from $TABLE_CATEGORIES where parent_id='$topic'";
$r=mysql_query($query);
?>
<option value="0">Sub Area</option>
<?php while($row=mysql_fetch_array($r)) {
echo '<option value='.$row['cat_id'].'>'.$row['cat_title'].'</option>';
} 

// Now fernando changed line 15 =) again aaa

// now line 17 fernando
?>
