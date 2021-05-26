<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
 { 
 die('Could not connect: ' . mysql_error()); 
 } 
mysql_select_db("lat_dbase", $con); 
mysql_query("UPDATE tamu SET addres = 'jakarta' 
WHERE FirstName = 'Lutfi' AND LastName = 'Anisa'"); 
mysql_close($con); 
?> 