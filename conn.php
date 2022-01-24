<?php

$db = mysqli_connect("localhost","root","","guhindura");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
//   $server = "localhost";
//   $user ="root";
//   $pass ="";
//   $db = "Guhindura";

//   $conn = mysqli_connect($server, $user, $pass,$db);

  //if($conn){
	 // echo "Connected"."<br/>";
  //}else{
	 // echo "Not connected".mysqli_error($conn);
  //}
?>