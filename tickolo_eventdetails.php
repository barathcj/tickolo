<?php
mysql_connect("localhost","admindCZYsJ9","1m-GZ-Gispqp");
mysql_select_db("tickolo");
$eventnames =   $_POST['eventname'];
$sql=mysql_query("select * from tickets where event_name = '" . $eventnames . "'");
//$sql=mysql_query("select * from tickets where event_name = 'ssui class'");
//echo $eventnames;
while($row=mysql_fetch_assoc($sql)){
	$output[]=$row;
}
print(json_encode($output));// this will print the output in json
mysql_close();
?>