<?php
$connection = mysql_connect("localhost", "root", "SrGAygSiO7J-","al-safadb"); // Establishing Connection with Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

$vndr = $_POST['vndr'];
$datef = $_POST['datef'];
$datet = $_POST['datet'];

    

$sql = "SELECT entryno,datee,vendor,driver_name,cab_no,company_name,customer_name,contact_no,pick_up,drop_loc,timee FROM `al-safadb`.`dutydetails` WHERE vendor = '".$vndr."' AND datee BETWEEN '".$datef."' AND '".$datet."'";
 $query = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($query);

    echo "<table><tr><th>Entry No.</th><th>Date</th><th></th><th></th><th>Vendor</th><th>Driver Name</th><th>Cab No</th><th></th><th></th><th>Company</th><th>Customer Name</th><th>Contact No.</th><th></th><th></th><th>Pick Up</th><th></th><th></th><th>Drop Location</th><th>Time</th></tr>";
    do{
        
        echo "<tr><td>".$row["entryno"]."</td><td>".$row["datee"]."</td><td>"."</td><td>"."</td><td>".$row["vendor"]."</td><td>".$row["driver_name"]."</td><td>".$row["cab_no"]."</td><td>"."</td><td>"."</td><td>".$row["company_name"]."</td><td>".$row["customer_name"]."</td><td>".$row["contact_no"]."</td><td>"."</td><td>"."</td><td>".$row["pick_up"]."</td><td>"."</td><td>"."</td><td>".$row["drop_loc"]."</td><td>".$row["timee"]."</td><td>"."</td><td>"."</td></tr>";
        
    }while($row = mysql_fetch_assoc($query));
    echo "</table>";
} 
else {
    echo "0 results";
}
mysql_close($connection); // Closing Connection with Server
?>