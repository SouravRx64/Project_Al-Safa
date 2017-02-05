<?php
$connection = mysql_connect("localhost", "root", "SrGAygSiO7J-"); // Establishing Connection with Server
$db = mysql_select_db("al-safadb", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$customer = $_POST['customer'];
$company = $_POST['company'];
$contact = $_POST['contact'];
$driver = $_POST['driver'];
$cab = $_POST['cab'];
$pick = $_POST['pick'];
$dropl = $_POST['dropl'];
$timee = $_POST['timee'];
$datee = $_POST['datee'];
$amt = $_POST['amt'];
$echarges = $_POST['echarges'];
$vndr = $_POST['vndr'];
 $total_amount = $amt + $echarges;   
if($customer !=''||$driver !=''){
//Insert Query of SQL
$query = mysql_query("insert into dutydetails(customer_name, company_name, contact_no, driver_name, cab_no, pick_up, drop_loc, timee, datee, base_amount,extra_charges, vendor,total_amount) values ('$customer', '$company', '$contact', '$driver', '$cab', '$pick', '$dropl', '$timee', '$datee', '$amt','$echarges','$vndr','$total_amount')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
header("Location:DutyEntry.html");
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>