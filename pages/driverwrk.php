<?php
$connection = mysql_connect("localhost", "root", "SrGAygSiO7J-","al-safadb"); // Establishing Connection with Server // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

$driver = $_POST['driver'];
$datef = $_POST['datef'];
$datet = $_POST['datet'];


$sql = "SELECT datee,driver_name,cab_no,company_name,pick_up,drop_loc,timee,vendor,amount FROM `al-safadb`.`dutydetails` WHERE cab_no = '".$driver."' AND datee BETWEEN '".$datef."' AND '".$datet."'";
    $query = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_assoc($query);
    echo "<table><tr><th>Date</th><th>Driver Name</th><th>Cab No</th><th>Company</th><th>Pick Up</th><th>Drop Location</th><th>Time</th><th>Vendor</th><th>Amount</th></tr>";
do{
    echo "<tr><td>".$row["datee"]."</td><td>".$row["driver_name"]."</td><td>".$row["cab_no"]."</td><td>".$row["company_name"]."</td><td>".$row["pick_up"]."</td><td>".$row["drop_loc"]."</td><td>".$row["timee"]."</td><td>".$row["vendor"]."</td><td>".$row["amount"]."</td></tr>";
}while($row = mysql_fetch_assoc($query));
echo "</table>";
} 
    else {
    echo "0 results";
}


mysql_close($connection); // Closing Connection with Server
?>