<?php
$connection = mysql_connect("localhost", "root", "SrGAygSiO7J-"); // Establishing Connection with Server
$db = mysql_select_db("al-safadb", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

$driver = $_POST['driver'];
$contact = $_POST['contact'];
$cab = $_POST['cab'];
$address = $_POST['address'];
    
if($driver !=''||$cab !=''){
//Insert Query of SQL
$query = mysql_query("insert into driver(driver_name, contact_no, cab_no, address) values ('$driver', '$contact', '$cab', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
header("Location:DriverEntry.html");
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>