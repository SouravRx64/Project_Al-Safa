<?php
$name = $_POST['uname'];
$company = $_POST['cname'];
$contact1 = $_POST['pno'];
$emailadd = $_POST['email'];
$address = $_POST['address'];
$formcontent = " From: $name \n Company: $company \n Contact: $contact1 \n E-mail Id: $emailadd \n Address: $address";
$recipient = "alsafa.travelss@gmail.com";
$subject = "Corporate Form";
$mailheader = "From: $emailadd";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo"!!!!!!! Thank you for your interest. Will Get Back To You ASAP. You will be redirected to the webpage in 3 seconds. !!!!!!!";
header('Refresh: 3; URL=http://alsafatravels.in/pages/Corporate.html');
?>
