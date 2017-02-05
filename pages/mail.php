<?php    
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];
$formcontent = " From: $name \n Phone: $phone \n email : $email\n Website: $website \n Message: $message";
$recipient = "alsafa.travelss@gmail.com";
$subject = "Feedback/Contact Form";
$mailheader = "From:$email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo"!!!!!!! Thank you for your Feedback/Suggestion. Will Get Back To You. You will be redirected to the webpage in 3 seconds. !!!!!!!";
header('Refresh: 3; URL=http://alsafatravels.in/pages/Contact.html');
?>
