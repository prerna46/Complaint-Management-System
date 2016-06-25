<?php

$localhost="localhost";
$username="root";
$password="";
$db_name="userlogin";



$con=new mysqli($localhost,$username,$password,$db_name);


if($con->connect_error)
{ echo "Failed to connect to MYSQL:". $con->connect_error();
  exit();
}

$sql="SELECT * FROM user";
$i=0;

if($result=$con->query($sql))
{
	while($row=$result->fetch_assoc())
	{ $user_n[$i]=$row["username"];
   $passwrd[$i]=$row["passwd"];
   $i=$i+1;
   }
}

$result->free();
$j=0;
while($j<$i)
{
   echo $user_n[$j] ;
   echo $passwrd[$j];
   $j=$j+1;
 }  
$con->close();


?>