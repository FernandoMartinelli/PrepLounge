<?php 
include_once('config/mysql-config.php');
$t=$_GET[topic];
$query="select * from $TABLE_CATEGORIES where parent_id='$t'";
$r=mysql_query($query);
?>
<option value="0">Sub Area</option>

<?php while($row=mysql_fetch_array($r)) {
print( '<option value='.$row['cat_id'].'>'.$row['cat_title'].'</option>');

} 
?>
