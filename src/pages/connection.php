<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "espace_etudiant";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
/*
 if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  else {
    echo 'Connected to the database Succefully.<br>';
  }*/
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>

