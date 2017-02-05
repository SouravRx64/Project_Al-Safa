<?php 

$pdate = $_POST['pdate'];
$ctype = $_POST['menu'];
$pickloc = $_POST['pickloc'];
$odate = $_POST['odate'];
$ser = $_POST['mydropdown'];
$droploc = $_POST['droploc'];
$name = $_POST['name'];
$email = $_POST['email'];
$pno = $_POST['pno'];
$msg = $_POST['message'];


$formcontentadmin = " From: $name \n Contact No.: $pno \n email : $email \n Pickup Date: $pdate \n Dropoff Date: $odate \n Cab Type: $ctype \n Service: $ser \n Pickup Location: $pickloc \n Dropoff Location: $droploc";
$formcontentclient = "Dear Sir/Madam($email),\n\nYour booking has been acknowleged by us. We will get in touch with you ASAP, then your booking shall be confirmed,\n\n\nWarm Regards,\nAl-Safa Team.";
$recipientadmin = "alsafa.travelss@gmail.com";
$recipientclient = $email;
$subjectadmin = "New Booking...Check ASAP.";
$subjectclient = "Acknowlegment of the booking made on Al-Safa Tours & Travels.";
$mailheaderadmin = "From:$email";
$mailheaderclient = "From:alsafatravelss@gmail.com";
mail($recipientadmin, $subjectadmin, $formcontentadmin, $mailheaderadmin) or die("Error!");
mail($recipientclient, $subjectclient, $formcontentclient, $mailheaderclient) or die("Error!");
echo"!!!!!!! Thank you for your Booking. Will Get Back To You ASAP. You will be redirected to the webpage in 3 seconds. !!!!!!!";
header('Refresh: 3; URL=http://alsafatravels.in');
?>
