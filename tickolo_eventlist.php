<?php
mysql_connect("localhost","admindCZYsJ9","1m-GZ-Gispqp");
mysql_select_db("tickolo");
$sql=mysql_query("select event_type, event_name, event_date from tickets where facevalue>=price");
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));// this will print the output in json
mysql_close();
?>