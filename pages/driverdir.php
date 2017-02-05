<?php
$connection = mysql_connect("localhost", "root", "SrGAygSiO7J-","al-safadb"); // Establishing Connection with Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL



$sql = "SELECT * FROM `al-safadb`.`driver`";
 $query = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($query);

    echo "<table><tr><th>Entry No.</th><th>Driver Name</th><th></th><th></th><th>Contact No.</th><th></th><th></th><th>Cab No</th><th></th><th></th><th>Address</th><th></th><th></th><th></th></tr>";
    do{
        
        echo "<tr><td>".$row["entryno"]."</td><td>".$row["driver_name"]."</td><td>"."</td><td>"."</td><td>".$row["contact_no"]."</td><td>"."</td><td>"."</td><td>".$row["cab_no"]."</td><td>"."</td><td>"."</td><td>".$row["address"]."</td></tr>";
        
    }while($row = mysql_fetch_assoc($query));
    echo "</table>";
} 
else {
    echo "0 results";
}
mysql_close($connection); // Closing Connection with Server
?>