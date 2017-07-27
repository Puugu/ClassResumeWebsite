<?php
/*	This file has connects to the database for a resume webiste created for CSS 405 Advanced Internet,
	USM Summer 2017
	Code copied from Lindy Nelson
	Edited by Courtney Kirkham
	Edited on: 27 July 2017 */

include("dbcredentials.php");
 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

?>