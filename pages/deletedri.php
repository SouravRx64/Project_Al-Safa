<?php
$connection = mysql_connect("localhost", "root", "SrGAygSiO7J-","al-safadb"); // Establishing Connection with Server // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

$drow = $_POST['drow'];

$sql = "DELETE FROM `al-safadb`.`driver` WHERE entryno='".$drow."'";
    $query = mysql_query($sql) or die(mysql_error());
   header("Location:DriverRecord.html"); 
}

mysql_close($connection); // Closing Connection with Server
?>