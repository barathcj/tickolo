<?php
mysql_connect("localhost","admindCZYsJ9","1m-GZ-Gispqp");
mysql_select_db("tickolo");
$eventname =   $_POST['eventname'];
$sql=mysql_query("delete from tickets where event_name = '" . $eventname . "'");
//$sql=mysql_query("select * from tickets where event_name = 'ssui class'");
//echo $eventnames;
if (!$sql) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    echo $message;
}
print($sql);// this will print the output in json
mysql_close();
?>